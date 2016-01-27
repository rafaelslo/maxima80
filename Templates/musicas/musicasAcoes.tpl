
{if $acao eq 'Proposta'}
    <a class="btn btn-primary" href= "{$smarty.session.baseURL}/musicas/status/{$id}4" role="button">Aprovar Música</a>
    <a class="btn btn-danger" href= "{$smarty.session.baseURL}/musicas/status/{$id}3" role="button">Rejeitar Música</a>
{elseif $acao eq 'Pronta'}
    <a class="btn btn-info" href= "{$smarty.session.baseURL}/musicas/status/{$id}5" role="button">Retornar para Preparação</a>
{elseif $acao eq 'Rejeitada'}
    <a class="btn btn-warning" href= "{$smarty.session.baseURL}/musicas/status/{$id}1" role="button">Retornar para Proposta</a>
{elseif $acao eq 'Aprovada'}
    <a class="btn btn-info" href= "{$smarty.session.baseURL}/musicas/status/{$id}5" role="button">Iniciar Preparação</a>
{elseif $acao eq 'Preparação'}
    <a class="btn btn-primary" href= "{$smarty.session.baseURL}/musicas/status/{$id}4" role="button">Retornar para Aprovada</a>
    <a class="btn btn-success" href= "{$smarty.session.baseURL}/musicas/status/{$id}2" role="button">Música Pronta</a>
{/if}
