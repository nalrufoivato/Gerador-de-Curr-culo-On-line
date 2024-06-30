function adicionarFormacao() {
    const formacoesDiv = document.getElementById('formacoes');
    const novaFormacao = document.createElement('div');
    novaFormacao.classList.add('formacao-item');
    novaFormacao.innerHTML = `
        <input type="text" name="formacao[]" placeholder="Curso">
        <input type="text" name="instituicao[]" placeholder="Instituição">
        <input type="text" name="ano[]" placeholder="Ano de Conclusão">
    `;
    formacoesDiv.appendChild(novaFormacao);
}

function adicionarExperiencia() {
    const experienciasDiv = document.getElementById('experiencias');
    const novaExperiencia = document.createElement('div');
    novaExperiencia.classList.add('experiencia-item');
    novaExperiencia.innerHTML = `
        <input type="text" name="cargo[]" placeholder="Cargo">
        <input type="text" name="empresa[]" placeholder="Empresa">
        <input type="text" name="periodo[]" placeholder="Período">
    `;
    experienciasDiv.appendChild(novaExperiencia);
}