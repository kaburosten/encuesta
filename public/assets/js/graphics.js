var graphics = new function()
{
	this.init=function()
	{
		$.ajax
		({
			url:'data/graphics',
			dataType:'json',
			type: 'post',
			success:function(data)
			{
				console.log(data);
			}
		});
		this.useDay();
	}

	this.useDay=function()
	{
		Morris.Line({
			element: 'myfirstchart',
			data: [
			  { y: '2013-01', a: 100},
			  { y: '2013-02', a: 75},
			  { y: '2013-03', a: 50},
			  { y: '2013-04', a: 75},
			  { y: '2013-05', a: 50},
			  { y: '2013-06', a: 75},
			  { y: '2013-07', a: 100}
			],
			xkey: 'y',
			ykeys: ['a'],
			labels: ['Usuarios']
		});

	}

};