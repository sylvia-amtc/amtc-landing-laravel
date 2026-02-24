import * as d3 from 'd3';
import { createBaseMap, animateLine } from './utils';

export function renderSRTDistribution(container, data) {
    const width = 800;
    const height = 500;

    const { svg, projection, path } = createBaseMap(container, width, height);

    // Draw origin point (Antwerp HQ)
    const origin = projection([data.origin.lon, data.origin.lat]);
    svg.append('circle')
        .attr('cx', origin[0])
        .attr('cy', origin[1])
        .attr('r', 8)
        .attr('fill', '#D1FAE5')
        .attr('class', 'glow-green');

    // Draw destination points
    data.destinations.forEach((dest, i) => {
        const destPoint = projection([dest.lon, dest.lat]);

        // Destination marker
        svg.append('circle')
            .attr('cx', destPoint[0])
            .attr('cy', destPoint[1])
            .attr('r', 5)
            .attr('fill', '#6366f1')
            .attr('opacity', 0)
            .transition()
            .delay(i * 200)
            .duration(500)
            .attr('opacity', 1);

        // Connection line (animated)
        const line = svg.append('line')
            .attr('x1', origin[0])
            .attr('y1', origin[1])
            .attr('x2', destPoint[0])
            .attr('y2', destPoint[1])
            .attr('stroke', '#06b6d4')
            .attr('stroke-width', 2)
            .attr('opacity', 0.6);

        animateLine(line, 2000 + i * 200);
    });
}
