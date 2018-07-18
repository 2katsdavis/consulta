<!-- /*
*    main.js
*    Mastering Data Visualization with D3.js
*    3.2 - Linear scales
*/ -->

<?php 
include_once "dataPhp/conn.php";

//////////
$MusicGeneros = array( );
$generosNames = array("Metal", "Hip", "Reggae"); 
for ($i=0; $i < count($generosNames) ; $i++) {     
$restotal = mysqli_query($conn, "SELECT COUNT(*) FROM encuensta WHERE Musica= '$generosNames[$i]'  ");
$restotaldata = mysqli_fetch_assoc($restotal);
// print_r($restotaldata);
$MusicGeneros += [ $generosNames[$i] => $restotaldata['COUNT(*)'] ];
}//// for end
////////////ejemplo//////////////
$NumerosMusica = array("Reggae"=>"35", "Metal"=>"37", "Hip"=>"43","Rave"=>"35")
 ///////////
 ?>

<script> 



var myData = [<?php echo $NumerosMusica['Reggae'] ?>,
<?php echo $NumerosMusica['Metal'] ?>,
<?php echo $NumerosMusica['Hip'] ?>,
<?php echo $NumerosMusica['Rave'] ?>,
];


var colors = ['blue','orange','purple','green','yellow']

var svg = d3.select("#chart-area")
    .append("svg")
        .attr("width", "400")
        .attr("height", "340");

console.log('Roberto'+d3.max(myData))
    console.log('esta es el valor maximo' +d3.max( myData))
    var y = d3.scaleLinear()
        .domain([0, d3.max(myData)])
        .range([0, 250]);


    var rects = svg.selectAll("rect")
            .data(myData)
        .enter()
            .append("rect")
            .attr("y", function (d,i) {
                 return 300 - y(d) ;
            } )
            .attr("x", function(d, i){
                return (i * 45);
            })
            .attr("width", 40)
            .attr("height", function(d){
                return y(d) ;
            })
            .attr("fill", function(d,i) {
                return colors[i];
            });

 

</script>

