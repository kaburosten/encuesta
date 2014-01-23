@extends ('admin/layout')

@section ('title') Dashboard @stop

@section ('content')

<div id="myfirstchart" style="height: 250px;"></div>
<script type="text/javascript">
   $(document).ready(function(){
      graphics.init();
   });
</script>

@stop