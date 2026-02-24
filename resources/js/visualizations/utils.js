import * as d3 from 'd3';

export function createBaseMap(container, width, height) {
    const svg = d3.select(container)
        .append('svg')
        .attr('width', width)
        .attr('height', height);

    const projection = d3.geoMercator()
        .scale(width / 6.5)
        .translate([width / 2, height / 1.5]);

    const path = d3.geoPath().projection(projection);

    return { svg, projection, path };
}

export function animateLine(selection, duration = 2000) {
    const totalLength = selection.node().getTotalLength();

    selection
        .attr('stroke-dasharray', totalLength + ' ' + totalLength)
        .attr('stroke-dashoffset', totalLength)
        .transition()
        .duration(duration)
        .ease(d3.easeLinear)
        .attr('stroke-dashoffset', 0);
}
