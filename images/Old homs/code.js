$(function(){ // on dom ready

var cy = cytoscape({
  container: document.getElementById('cy'),

  boxSelectionEnabled: false,
  autounselectify: true,

  style: cytoscape.stylesheet()
    .selector('node')
      .css({
        'content': 'data(id)',
        'color': '#424242'
      })
    .selector('edge')
      .css({
        'target-arrow-shape': 'triangle',
        'width': 4,
        'line-color': '#ddd',
        'target-arrow-color': '#ddd',
        'curve-style': 'bezier'
      })
    .selector('.highlighted')
      .css({
        'background-color': '#61bffc',
        'line-color': '#61bffc',
        'target-arrow-color': '#61bffc',
        'transition-property': 'background-color, line-color, target-arrow-color',
        'transition-duration': '0.5s'
      }),
  
  elements: {
      nodes: [
        { data: { id: 'MS' } },
        { data: { id: 'AO' } },
        { data: { id: 'EB 1' } },
        { data: { id: 'EB 2' } },
        { data: { id: 'EB 3' } }
      ], 
      
      edges: [
        { data: { id: 'MS_AO', weight: 1, source: 'MS', target: 'AO' } },
        { data: { id: 'AO_EB1', weight: 3, source: 'AO', target: 'EB 1' } },
        { data: { id: 'EB1_EB2', weight: 4, source: 'EB 1', target: 'EB 2' } }
        
      ]
    },
   layout: {
    name: 'grid',
    padding: 50
  },
    ready: function(){
    window.cy = this;
  },
  
  styl: 'node { content: data(label); }'
});

// you can use qtip's regular options
// see http://qtip2.com/
cy.$('#MS').qtip({
  content: 'Recieved Date to EB : 2016.05.03 <br> From whome Health ministry',
  position: {
    my: 'top center',
    at: 'bottom center'
  },
  styl: {
    classes: 'qtip-bootstrap', 
    tip: {
      width: 16,
      height: 8,
    }
  }
 /* layout: {
    name: 'breadthfirst',
    directed: true,
    roots: '#a',
    padding: 10
  } */
});
  
/*var bfs = cy.elements().bfs('#a', function(){}, true);

var i = 0;
var highlightNextEle = function(){
  if( i < bfs.path.length ){
    bfs.path[i].addClass('highlighted');
  
    i++;
    setTimeout(highlightNextEle, 1000);
  }
}; */

// kick off first highlight
highlightNextEle();

}); // on dom ready