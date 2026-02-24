import * as d3 from 'd3';
import { geoOrthographic, geoPath } from 'd3-geo';
import * as topojson from 'topojson-client';

// === Global Cities for Network Visualization ===
const GLOBAL_CITIES = [
    { name: 'New York', lat: 40.7128, lon: -74.0060, cdnTraffic: 45.2, activeStreams: 1247, peakBandwidth: 52.3 },
    { name: 'Los Angeles', lat: 34.0522, lon: -118.2437, cdnTraffic: 38.7, activeStreams: 1089, peakBandwidth: 44.1 },
    { name: 'London', lat: 51.5074, lon: -0.1278, cdnTraffic: 52.1, activeStreams: 1834, peakBandwidth: 61.2 },
    { name: 'Paris', lat: 48.8566, lon: 2.3522, cdnTraffic: 34.5, activeStreams: 923, peakBandwidth: 39.8 },
    { name: 'Frankfurt', lat: 50.1109, lon: 8.6821, cdnTraffic: 41.3, activeStreams: 1156, peakBandwidth: 48.7 },
    { name: 'Tokyo', lat: 35.6762, lon: 139.6503, cdnTraffic: 48.9, activeStreams: 1678, peakBandwidth: 56.4 },
    { name: 'Singapore', lat: 1.3521, lon: 103.8198, cdnTraffic: 36.2, activeStreams: 1034, peakBandwidth: 42.1 },
    { name: 'Sydney', lat: -33.8688, lon: 151.2093, cdnTraffic: 28.4, activeStreams: 767, peakBandwidth: 33.2 },
    { name: 'São Paulo', lat: -23.5505, lon: -46.6333, cdnTraffic: 31.7, activeStreams: 892, peakBandwidth: 37.5 },
    { name: 'Mexico City', lat: 19.4326, lon: -99.1332, cdnTraffic: 26.3, activeStreams: 645, peakBandwidth: 30.8 },
    { name: 'Toronto', lat: 43.6532, lon: -79.3832, cdnTraffic: 24.1, activeStreams: 578, peakBandwidth: 28.3 },
    { name: 'Mumbai', lat: 19.0760, lon: 72.8777, cdnTraffic: 33.8, activeStreams: 1012, peakBandwidth: 39.2 },
    { name: 'Dubai', lat: 25.2048, lon: 55.2708, cdnTraffic: 29.6, activeStreams: 834, peakBandwidth: 34.7 },
    { name: 'Moscow', lat: 55.7558, lon: 37.6173, cdnTraffic: 27.9, activeStreams: 712, peakBandwidth: 32.4 },
    { name: 'Seoul', lat: 37.5665, lon: 126.9780, cdnTraffic: 42.5, activeStreams: 1289, peakBandwidth: 49.3 },
    { name: 'Hong Kong', lat: 22.3193, lon: 114.1694, cdnTraffic: 39.1, activeStreams: 1123, peakBandwidth: 45.6 },
    { name: 'Amsterdam', lat: 52.3676, lon: 4.9041, cdnTraffic: 37.4, activeStreams: 1045, peakBandwidth: 43.2 },
    { name: 'Stockholm', lat: 59.3293, lon: 18.0686, cdnTraffic: 22.7, activeStreams: 534, peakBandwidth: 26.9 },
    { name: 'Cape Town', lat: -33.9249, lon: 18.4241, cdnTraffic: 18.3, activeStreams: 423, peakBandwidth: 21.7 },
    { name: 'Buenos Aires', lat: -34.6037, lon: -58.3816, cdnTraffic: 21.5, activeStreams: 498, peakBandwidth: 25.3 },
    { name: 'Chicago', lat: 41.8781, lon: -87.6298, cdnTraffic: 35.9, activeStreams: 967, peakBandwidth: 41.4 },
    { name: 'Atlanta', lat: 33.7490, lon: -84.3880, cdnTraffic: 30.2, activeStreams: 812, peakBandwidth: 35.6 },
    { name: 'Miami', lat: 25.7617, lon: -80.1918, cdnTraffic: 27.8, activeStreams: 701, peakBandwidth: 32.1 },
    { name: 'Warsaw', lat: 52.2297, lon: 21.0122, cdnTraffic: 19.4, activeStreams: 456, peakBandwidth: 23.1 },
    { name: 'Istanbul', lat: 41.0082, lon: 28.9784, cdnTraffic: 25.6, activeStreams: 623, peakBandwidth: 29.8 },
];

// Seeded random number generator for deterministic connections
function seededRandom(seed) {
    return function() {
        seed = (seed * 16807) % 2147483647;
        return (seed - 1) / 2147483646;
    };
}

// Generate random SRT connections between cities
function generateSRTConnections() {
    const rng = seededRandom(42);
    const connections = [];
    const connectionCount = 50;

    for (let i = 0; i < connectionCount; i++) {
        const fromIndex = Math.floor(rng() * GLOBAL_CITIES.length);
        let toIndex = Math.floor(rng() * GLOBAL_CITIES.length);

        while (toIndex === fromIndex) {
            toIndex = Math.floor(rng() * GLOBAL_CITIES.length);
        }

        const from = GLOBAL_CITIES[fromIndex];
        const to = GLOBAL_CITIES[toIndex];

        // Calculate approximate distance for latency
        const dx = (to.lon - from.lon) * Math.cos((from.lat + to.lat) * Math.PI / 360);
        const dy = to.lat - from.lat;
        const distance = Math.sqrt(dx * dx + dy * dy);

        const baseLatency = Math.max(1, distance * 5);
        const latency = Math.round(baseLatency + rng() * 20);
        const jitter = Math.round(rng() * 5 + 0.5);
        const packetLoss = rng() * 0.5;

        let status;
        if (packetLoss < 0.05 && jitter < 2) status = 'optimal';
        else if (packetLoss < 0.2) status = 'active';
        else status = 'degraded';

        const bandwidth = Math.round((6 + rng() * 19) * 10) / 10; // 6-25 Mbps (realistic SRT)
        const trafficVolume = Math.round(bandwidth * 24 * 60 * 60 * 0.7 / 8000 * 10) / 10; // Convert Mbps to GB/day

        connections.push({
            from,
            to,
            bandwidth,
            latency,
            jitter,
            packetLoss,
            status,
            trafficVolume,
        });
    }

    return connections;
}

/**
 * Render an interactive 3D globe with connection lines and CDN heatmaps
 * @param {HTMLElement|string} container - DOM element or selector
 */
export function renderGlobe(container) {
    const width = 600;
    const height = 600;

    const target = typeof container === 'string' ? document.querySelector(container) : container;
    if (!target) {
        console.error('Globe container not found');
        return;
    }

    target.innerHTML = '';

    const srtConnections = generateSRTConnections();

    // State management
    let rotation = [0, -20];
    let isDragging = false;
    let lastMouse = { x: 0, y: 0 };
    let velocity = { x: 0, y: 0 };
    let lastInteractionTime = Date.now();
    let autoRotateEnabled = true;
    let hoveredCity = null;
    let hoveredConnection = null;

    // Create projection
    const projection = geoOrthographic()
        .scale(250)
        .translate([width / 2, height / 2])
        .rotate(rotation);

    const path = geoPath().projection(projection);

    // Load continent data from world-atlas
    let continentData = null;

    d3.json('https://unpkg.com/world-atlas@2/countries-110m.json')
        .then(topology => {
            console.log('Continent topology loaded:', topology);
            // Convert TopoJSON land geometry to GeoJSON
            continentData = topojson.feature(topology, topology.objects.land);
            console.log('Continent data converted:', continentData);
            updateContinents(); // Initial render
            console.log('Continents rendered');
        })
        .catch(err => {
            console.error('Failed to load continent data:', err);
        });

    // Create SVG
    const svg = d3.select(target)
        .append('svg')
        .attr('width', width)
        .attr('height', height)
        .attr('viewBox', `0 0 ${width} ${height}`)
        .attr('class', 'globe-svg');

    // Add gradients
    const defs = svg.append('defs');

    const globeGradient = defs.append('radialGradient')
        .attr('id', 'globe-gradient');
    globeGradient.append('stop')
        .attr('offset', '0%')
        .attr('stop-color', '#15233d');
    globeGradient.append('stop')
        .attr('offset', '100%')
        .attr('stop-color', '#060a13');

    // Draw globe sphere
    svg.append('circle')
        .attr('cx', width / 2)
        .attr('cy', height / 2)
        .attr('r', 250)
        .attr('fill', 'url(#globe-gradient)')
        .attr('stroke', '#1e3a8a')
        .attr('stroke-width', 1)
        .attr('opacity', 0.9);

    // Add continents group (renders above sphere, below graticule)
    const continentsGroup = svg.append('g').attr('class', 'continents');
    continentsGroup.append('path')
        .attr('class', 'land')
        .attr('fill', '#2a3f5f')
        .attr('fill-opacity', 0.4)
        .attr('stroke', '#4a6fa5')
        .attr('stroke-width', 0.8)
        .attr('stroke-opacity', 0.6);

    // Add graticule
    const graticule = d3.geoGraticule();
    const graticuleGroup = svg.append('g').attr('class', 'graticule-group');
    graticuleGroup.append('path')
        .datum(graticule)
        .attr('class', 'graticule')
        .attr('d', path)
        .attr('fill', 'none')
        .attr('stroke', '#1a2236')
        .attr('stroke-width', 0.5)
        .attr('opacity', 0.3);

    // Connection lines group
    const connectionGroup = svg.append('g').attr('class', 'connections');

    // City markers group
    const markerGroup = svg.append('g').attr('class', 'markers');

    // Tooltip
    const tooltip = d3.select(target)
        .append('div')
        .attr('class', 'globe-tooltip')
        .style('position', 'absolute')
        .style('background', '#0c1220f0')
        .style('border', '1px solid #2a3654')
        .style('border-radius', '10px')
        .style('padding', '12px 16px')
        .style('pointer-events', 'none')
        .style('opacity', 0)
        .style('box-shadow', '0 12px 40px rgba(0, 0, 0, 0.6)')
        .style('backdrop-filter', 'blur(8px)')
        .style('z-index', '20')
        .style('font-family', '-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif');

    function updateProjection() {
        projection.rotate(rotation);
        updateContinents();
        graticuleGroup.select('.graticule').attr('d', path);
        updateConnections();
        updateMarkers();
    }

    function updateContinents() {
        if (!continentData) return; // Data not loaded yet

        continentsGroup.select('.land')
            .datum(continentData)
            .attr('d', d => path(d)); // Force path generation
    }

    function updateConnections() {
        const connectionData = connectionGroup.selectAll('.connection-line')
            .data(srtConnections, (d, i) => i);

        connectionData.exit().remove();

        const connectionEnter = connectionData.enter()
            .append('path')
            .attr('class', 'connection-line')
            .attr('fill', 'none')
            .style('cursor', 'pointer');

        connectionData.merge(connectionEnter)
            .each(function(conn) {
                const fromVisible = isVisible(conn.from);
                const toVisible = isVisible(conn.to);

                if (!fromVisible && !toVisible) {
                    d3.select(this).attr('opacity', 0);
                    return;
                }

                const lineData = {
                    type: 'LineString',
                    coordinates: [[conn.from.lon, conn.from.lat], [conn.to.lon, conn.to.lat]]
                };

                const statusColors = {
                    optimal: '#22c55e',
                    active: '#eab308',
                    degraded: '#ef4444',
                };
                const lineColor = statusColors[conn.status];
                const isHovered = hoveredConnection === conn;
                const baseThickness = 0.5 + (conn.bandwidth / 20) * 1.5;
                const thickness = isHovered ? baseThickness * 2 : baseThickness;
                const baseOpacity = (fromVisible && toVisible) ? 0.4 : 0.1;
                const opacity = isHovered ? Math.min(1, baseOpacity * 3) : baseOpacity;

                d3.select(this)
                    .datum(lineData)
                    .attr('d', path)
                    .attr('stroke', lineColor)
                    .attr('stroke-width', thickness)
                    .attr('opacity', opacity);
            });
    }

    function updateMarkers() {
        const markerData = markerGroup.selectAll('.city-marker')
            .data(GLOBAL_CITIES, d => d.name);

        markerData.exit().remove();

        const markerEnter = markerData.enter()
            .append('g')
            .attr('class', 'city-marker')
            .style('cursor', 'pointer');

        markerEnter.append('circle').attr('class', 'city-glow');
        markerEnter.append('circle').attr('class', 'city-core');

        markerData.merge(markerEnter)
            .each(function(city) {
                const coords = projection([city.lon, city.lat]);
                const visible = isVisible(city);

                if (!visible || !coords) {
                    d3.select(this).attr('opacity', 0);
                    return;
                }

                const trafficRatio = Math.min(1, city.cdnTraffic / 60);
                const baseSize = 3 + trafficRatio * 7;
                const isHovered = hoveredCity === city;
                const size = isHovered ? baseSize * 1.5 : baseSize;

                let heatColor;
                if (trafficRatio < 0.25) heatColor = '#38bdf8';
                else if (trafficRatio < 0.5) heatColor = '#06b6d4';
                else if (trafficRatio < 0.75) heatColor = '#eab308';
                else heatColor = '#ef4444';

                const marker = d3.select(this);
                marker.attr('transform', `translate(${coords[0]}, ${coords[1]})`);
                marker.attr('opacity', 1);

                marker.select('.city-glow')
                    .attr('r', size * 2.5)
                    .attr('fill', heatColor)
                    .attr('opacity', isHovered ? 0.3 : 0.15);

                marker.select('.city-core')
                    .attr('r', size)
                    .attr('fill', heatColor)
                    .attr('opacity', 0.9);
            });
    }

    function isVisible(city) {
        const rotated = projection.rotate();
        return d3.geoDistance([-rotated[0], -rotated[1]], [city.lon, city.lat]) < Math.PI / 2;
    }

    // Drag behavior
    const drag = d3.drag()
        .on('start', function(event) {
            isDragging = true;
            lastMouse = { x: event.x, y: event.y };
            autoRotateEnabled = false;
            lastInteractionTime = Date.now();
        })
        .on('drag', function(event) {
            const deltaX = event.x - lastMouse.x;
            const deltaY = event.y - lastMouse.y;

            rotation[0] += deltaX * 0.5;
            rotation[1] = Math.max(-90, Math.min(90, rotation[1] - deltaY * 0.3));

            velocity = { x: deltaX * 0.5, y: -deltaY * 0.3 };
            lastMouse = { x: event.x, y: event.y };
            updateProjection();
        })
        .on('end', function() {
            isDragging = false;
        });

    svg.call(drag);

    // Mouse move for hover detection
    svg.on('mousemove', function(event) {
        if (isDragging) return;

        const [mx, my] = d3.pointer(event);
        let foundHover = false;

        // Check connection line hovers FIRST (higher priority)
        for (const conn of srtConnections) {
            if (foundHover) break;

            const fromCoords = projection([conn.from.lon, conn.from.lat]);
            const toCoords = projection([conn.to.lon, conn.to.lat]);

            if (!fromCoords || !toCoords) continue;
            if (!isVisible(conn.from) || !isVisible(conn.to)) continue;

            // Sample points along the great circle arc
            const samples = [];
            for (let t = 0; t <= 1; t += 0.05) {
                const interpolated = d3.geoInterpolate(
                    [conn.from.lon, conn.from.lat],
                    [conn.to.lon, conn.to.lat]
                )(t);
                const projected = projection(interpolated);
                if (projected) samples.push(projected);
            }

            // Check if mouse is near any sample point
            const hitRadius = 8;
            for (const [sx, sy] of samples) {
                const dist = Math.sqrt((mx - sx) ** 2 + (my - sy) ** 2);
                if (dist < hitRadius) {
                    hoveredConnection = conn;
                    hoveredCity = null;
                    foundHover = true;
                    autoRotateEnabled = false;
                    lastInteractionTime = Date.now();

                    const statusColors = {
                        optimal: '#22c55e',
                        active: '#eab308',
                        degraded: '#ef4444',
                    };

                    tooltip
                        .style('opacity', 1)
                        .style('left', `${mx + 16}px`)
                        .style('top', `${my - 10}px`)
                        .html(`
                            <div style="font-size: 14px; font-weight: 600; color: #f1f5f9; margin-bottom: 4px">
                                ${conn.from.name} → ${conn.to.name}
                            </div>
                            <div style="display: flex; align-items: center; gap: 6px; margin-bottom: 10px">
                                <div style="width: 6px; height: 6px; border-radius: 50%; background: ${statusColors[conn.status]}"></div>
                                <span style="font-size: 11px; color: #cbd5e1; text-transform: capitalize">${conn.status}</span>
                            </div>
                            <div style="display: flex; flex-direction: column; gap: 6px">
                                <div style="display: flex; justify-content: space-between">
                                    <span style="font-size: 12px; color: #64748b">Bandwidth</span>
                                    <span style="font-size: 13px; font-family: monospace; color: #38bdf8; font-weight: 600">${conn.bandwidth.toFixed(1)} Mbps</span>
                                </div>
                                <div style="display: flex; justify-content: space-between">
                                    <span style="font-size: 12px; color: #64748b">Latency</span>
                                    <span style="font-size: 13px; font-family: monospace; color: #22c55e">${conn.latency} ms</span>
                                </div>
                                <div style="display: flex; justify-content: space-between">
                                    <span style="font-size: 12px; color: #64748b">Jitter</span>
                                    <span style="font-size: 13px; font-family: monospace; color: #eab308">${conn.jitter.toFixed(1)} ms</span>
                                </div>
                                <div style="display: flex; justify-content: space-between">
                                    <span style="font-size: 12px; color: #64748b">Packet Loss</span>
                                    <span style="font-size: 13px; font-family: monospace; color: #ef4444">${conn.packetLoss.toFixed(2)}%</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-top: 4px; padding-top: 6px; border-top: 1px solid #1a2236">
                                    <span style="font-size: 12px; color: #64748b">Traffic Volume</span>
                                    <span style="font-size: 13px; font-family: monospace; color: #8b5cf6">${conn.trafficVolume.toFixed(1)} GB/day</span>
                                </div>
                            </div>
                        `);

                    updateProjection();
                    break;
                }
            }
        }

        // Check city hovers (only if no connection hover found)
        if (!foundHover) {
            GLOBAL_CITIES.forEach(city => {
                const coords = projection([city.lon, city.lat]);
                if (!coords || !isVisible(city)) return;

                const dist = Math.sqrt((mx - coords[0]) ** 2 + (my - coords[1]) ** 2);
                const trafficRatio = Math.min(1, city.cdnTraffic / 60);
                const baseSize = 3 + trafficRatio * 7;

                if (dist < baseSize + 10) {
                    hoveredCity = city;
                    hoveredConnection = null;
                    foundHover = true;
                    autoRotateEnabled = false;
                    lastInteractionTime = Date.now();

                    tooltip
                        .style('opacity', 1)
                        .style('left', `${mx + 16}px`)
                        .style('top', `${my - 10}px`)
                        .html(`
                            <div style="font-size: 14px; font-weight: 600; color: #f1f5f9; margin-bottom: 8px">${city.name}</div>
                            <div style="display: flex; flex-direction: column; gap: 6px">
                                <div style="display: flex; justify-content: space-between">
                                    <span style="font-size: 12px; color: #64748b">CDN Traffic</span>
                                    <span style="font-size: 13px; font-family: monospace; color: #38bdf8; font-weight: 600">${city.cdnTraffic.toFixed(1)} Gb/s</span>
                                </div>
                                <div style="display: flex; justify-content: space-between">
                                    <span style="font-size: 12px; color: #64748b">Active Streams</span>
                                    <span style="font-size: 13px; font-family: monospace; color: #22c55e">${city.activeStreams.toLocaleString()}</span>
                                </div>
                                <div style="display: flex; justify-content: space-between">
                                    <span style="font-size: 12px; color: #64748b">Peak Bandwidth</span>
                                    <span style="font-size: 13px; font-family: monospace; color: #eab308">${city.peakBandwidth.toFixed(1)} Gb/s</span>
                                </div>
                            </div>
                        `);
                }
            });
        }

        if (!foundHover) {
            hoveredCity = null;
            hoveredConnection = null;
            tooltip.style('opacity', 0);
        }

        updateProjection();
    });

    svg.on('mouseleave', function() {
        hoveredCity = null;
        hoveredConnection = null;
        tooltip.style('opacity', 0);
        updateProjection();
    });

    // Animation loop
    const timer = d3.timer(() => {
        if (!document.contains(target)) {
            timer.stop();
            return;
        }

        const now = Date.now();
        const timeSinceInteraction = now - lastInteractionTime;

        // Resume auto-rotation after 4 seconds
        if (!isDragging && !hoveredCity && timeSinceInteraction > 4000) {
            autoRotateEnabled = true;
        }

        // Apply auto-rotation
        if (autoRotateEnabled && !isDragging && !hoveredCity) {
            rotation[0] += 0.1;
        }

        // Apply momentum
        if (!isDragging) {
            rotation[0] += velocity.x;
            rotation[1] = Math.max(-90, Math.min(90, rotation[1] + velocity.y));
            velocity.x *= 0.92;
            velocity.y *= 0.92;

            if (Math.abs(velocity.x) < 0.001) velocity.x = 0;
            if (Math.abs(velocity.y) < 0.001) velocity.y = 0;
        }

        updateProjection();
    });
}
