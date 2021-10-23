@if ($mensagem = Session::get('success'))
    <div id="escondeDiv" class="alert alert-success">
        <strong>{{ $mensagem }}</strong>
    </div>
@endif

@if ($mensagem = Session::get('error'))
    <div id="escondeDiv" class="alert alert-danger">
        <strong>{{ $mensagem }}</strong>
    </div>
@endif

@if ($mensagem = Session::get('warning'))
    <div id="escondeDiv" class="alert alert-warning">
        <strong>{{ $mensagem }}</strong>
    </div>
@endif

@if ($mensagem = Session::get('info'))
    <div id="escondeDiv" class="alert alert-info">
        <strong>{{ $mensagem }}</strong>
    </div>
@endif

@if ($errors->any())
    <div id="escondeDiv" class="alert alert-success">
        <strong>Verifique os erros Abaixo!!!</strong>
    </div>
@endif

<script>
    setTimeout(function() {
        var escondeDiv = document.getElementById('escondeDiv');
        escondeDiv.style.display = 'none';
    }, 6000); // 6 seg. = 6000 milisegundos
</script>
