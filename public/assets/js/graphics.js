var graphics = new function()
{
	this.init=function()
	{
	   	var that=this;
	   	var host=window.location.href;
/*	   	host=host.replace('#', '');*/
	   	/*host=host.split('/');*/
		$.ajax
		
		({
			url:'data/graphics',
			dataType:'json',
			type: 'post',
			success:function(data)
			{
				that.useDay(data);
			}
		});
	}

	this.useDay=function(data)
	{
		var values=data
		var options={
            chart: {
            	renderTo: 'myfirstchart',
                type: 'column'
            },
            title: {
                text: 'Prueba'
            },
            subtitle: {
                text: 'otro'
            },
            xAxis: {
                labels:{
                	align:'center',
                	x:3,
                	y:-3
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Num. Alumnos'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
            		name:'opcion1', data:[]
                },
                {
            		name:'opcion2', data:[]
                },
                {
            		name:'opcion3', data:[]
                }]
        }
	/*data=[];*/

	useOption=0;

	try{
          jQuery.each(data, function(i,line){
          	console.log(line.total);
            if(line.opcion === 1){
              options.series[0].data.push(line.total);
            }else if((line.opcion === 2)){
              options.series[1].data.push(line.total);
            }else if((line.opcion === 3)){
              options.series[2].data.push(line.total);
            }
          });
          
          
        }catch(e){}
        /*console.log(series);*/
       /* options.series[0].data = data;*/
       	chart = new Highcharts.Chart(options);

	}

};