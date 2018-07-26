<!-- /*
*    main.js
*    Mastering Data Visualization with D3.js
*    3.2 - Linear scales
*/ -->

<?php 
include_once "dataPhp/conn.php";

// //////////
// $MusicGeneros = array( );
// $generosNames = array("Metal", "Hip", "Reggae"); 
// for ($i=0; $i < count($generosNames) ; $i++) {     
// $restotal = mysqli_query($conn, "SELECT COUNT(*) FROM encuensta WHERE Musica= '$generosNames[$i]'  ");
// $restotaldata = mysqli_fetch_assoc($restotal);
// // print_r($restotaldata);
// $MusicGeneros += [ $generosNames[$i] => $restotaldata['COUNT(*)'] ];
// }//// for end
////////////ejemplo//////////////
$NumerosMusica = array("Reggae"=>"35", "Metal"=>"37", "Hip"=>"43","Rave"=>"35","Banda"=>"35")
 ///////////
 ?>

<script> 


var myData = [<?php echo $NumerosMusica['Reggae'] ?>,
<?php echo $NumerosMusica['Metal'] ?>,
<?php echo $NumerosMusica['Hip'] ?>,
<?php echo $NumerosMusica['Rave'] ?>,
<?php echo $NumerosMusica['Banda'] ?>,
];

var generosJs = ['Reggae','Metal','Hip','Rave','Pueblo'];
var colors = ['blue','orange','purple','green','yellow'];


var margin = { left:100, right:10, top:10, bottom:100 };

var width = 600 - margin.left - margin.right,
    height = 400 - margin.top - margin.bottom;

var g = d3.select("#chart-area")
    .append("svg")
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
    .append("g")
        .attr("transform", "translate(" + margin.left 
            + ", " + margin.top + ")");

// X Label
g.append("text")
    .attr("class", "x axis-label")
    .attr("x", width / 2)
    .attr("y", height + 70)
    .attr("font-size", "20px")
    .attr("text-anchor", "middle")
    .text("Generos Musicales");

// Y Label
g.append("text")
    .attr("class", "y axis-label")
    .attr("x", - (height / 2))
    .attr("y", -60)
    .attr("font-size", "20px")
    .attr("text-anchor", "middle")
    .attr("transform", "rotate(-90)")
    .text("Height (m)");


/////////////  check the data 
console.log('Roberto'+d3.max(myData))
    console.log('esta es el valor maximo' +d3.max( myData))
////////

/// scale linear using de.max
    var y = d3.scaleLinear()
        .domain([0, d3.max(myData)])
        .range([height,0 ]);



    var x = d3.scaleBand()
        .domain(generosJs)
        .range([0, width])
        .paddingInner(0.2)
        .paddingOuter(0.2);  

////////color scale Ordinal

    var color = d3.scaleOrdinal()
     .domain(generosJs)
     .range(d3.schemePaired);    

 var xAxisCall = d3.axisBottom(x);
  g.append("g")
        .attr("class", "x axis")
        .attr("transform", "translate(0, " + height + ")")
        .call(xAxisCall)
    .selectAll("text")
        .attr("y", "10")
        .attr("x", "-5")
        .attr("text-anchor", "end")
        .attr("transform", "rotate(-40)");

 var yAxisCall = d3.axisLeft(y)
        .ticks(5)
        .tickFormat(function(d){
            return d + "m";
        });

    g.append("g")
        .attr("class", "y-axis")
        .call(yAxisCall);


    var rects = g.selectAll("rect")
            .data(myData)
        .enter()
            .append("rect")
            .attr("y", function (d,i) {    return  y(d) ;   } )
            .attr("x",function(d,i){ return x(generosJs[i]);             })
            .attr("width",x.bandwidth )
             .attr("height", function(d){ return height - y(d) ; })
            .attr("fill", function(d,i) {
                return color(generosJs[i]);
            })
            .attr('class',function(d,i){return generosJs[i]} )
            ;

      //to invert to operation y.invert(y(d))
 

</script>

