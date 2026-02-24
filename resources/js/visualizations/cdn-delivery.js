import * as d3 from 'd3';
import { createBaseMap } from './utils';

export function renderCDNDelivery(container, data) {
    const width = 800;
    const height = 500;

    const { svg, projection } = createBaseMap(container, width, height);

    // Draw origin (blue)
    const origin = projection([data.origin.lon, data.origin.lat]);
    svg.append('circle')
        .attr('cx', origin[0])
        .attr('cy', origin[1])
        .attr('r', 10)
        .attr('fill', '#3b82f6');

    // Draw edge nodes (cyan)
    data.edges.forEach(edge => {
        const point = projection([edge.lon, edge.lat]);
        svg.append('circle')
            .attr('cx', point[0])
            .attr('cy', point[1])
            .attr('r', 6)
            .attr('fill', '#06b6d4');

        // Connect to origin
        svg.append('line')
            .attr('x1', origin[0])
            .attr('y1', origin[1])
            .attr('x2', point[0])
            .attr('y2', point[1])
            .attr('stroke', '#818cf8')
            .attr('stroke-width', 1.5)
            .attr('opacity', 0.4);
    });

    // Draw end users (small dots around edges)
    data.edges.forEach(edge => {
        const edgePoint = projection([edge.lon, edge.lat]);
        edge.users.forEach(user => {
            const userPoint = projection([user.lon, user.lat]);
            svg.append('circle')
                .attr('cx', userPoint[0])
                .attr('cy', userPoint[1])
                .attr('r', 2)
                .attr('fill', '#D1FAE5');
        });
    });
}
