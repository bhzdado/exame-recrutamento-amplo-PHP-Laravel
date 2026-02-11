<style>
    body { font-family: sans-serif; background-color: #f4f7f6; padding: 40px; }
    .table-container { overflow-x: auto; background: white; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
    table { width: 100%; border-collapse: collapse; text-align: left; }
    th { background-color: #4a5568; color: white; padding: 12px 15px; }
    td { padding: 12px 15px; border-bottom: 1px solid #e2e8f0; }
    tr:nth-child(even) { background-color: #f8fafc; }
    tr:hover { background-color: #edf2f7; }
    .status-badge { padding: 4px 8px; border-radius: 4px; font-size: 0.85em; font-weight: bold; }
    .active { background-color: #c6f6d5; color: #22543d; }
    .inactive { background-color: #fed7d7; color: #822727; }
</style>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Data Início</th>
            <th>Data Fim</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pessoas as $pessoa)
            <tr>
                <td>{{ $pessoa[0] }}</td>
                <td>{{ $pessoa[1] }}</td>
                <td>{{ $pessoa[2] }}</td>
                <td>{{ $pessoa[3] ?? 'Ativo' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>