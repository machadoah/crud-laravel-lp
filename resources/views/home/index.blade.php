@extends('template.master')
@section("content")

<p id="data-hora-atual"></p>

@endsection
@section('script')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        function atualizarDataHora() {
            const dataHoraAtual = new Date();
            const elementoDataHora = document.getElementById("data-hora-atual");
            elementoDataHora.textContent = "Data e Hora Atual: " + dataHoraAtual.toLocaleString();
        }

        atualizarDataHora();
        setInterval(atualizarDataHora, 1000);
    });
</script>
@endsection
