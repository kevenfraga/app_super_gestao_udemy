<h3>Fornecedor (View)</h3>

@isset($fornecedores)
    @forelse ($fornecedores as $indice => $fornecedor)
    @dd($loop)
        Interação atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Não infomado' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr>
    @empty
        Não existem fornecedores cadastrados!
    @endforelse
@endisset
