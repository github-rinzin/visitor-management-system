<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<table id="report-table" class="table table-bordered table-sm">
    <thead>
        <tr>
            <th scope="col">Cid/Passport/Registation Number</th>
            <th scope="col">Full Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Token</th>
            <th scope="col">Head Count</th>
            <th scope="col">Date of Visit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($visitors as  $visitor)
            <tr>
                <td>{{ $visitor->id_number }}</td>
                <td>{{ $visitor->name }}</td>
                <td>{{ $visitor->phone }}</td>
                <td>{{ $visitor->token }}</td>
                <td>{{ $visitor->head_count }}</td>
                <td>{{ $visitor->created_at->format('d/m/Y') }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<style>
.dt-button {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 0.9rem;
    line-height: 1.6;
    border-radius: 0.25rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.buttons-copy {
    color:#212529;
    background-color:#ffed4a;
    border-color:#ffed4a;
}
.buttons-csv {
    color:#212529;
    background-color:#3490dc;
    border-color:#3490dc;
}
.buttons-excel {
    color:#212529;
    background-color:#38c172;
    border-color:#38c172;
}
.buttons-pdf {
    color:#212529;
    background-color:#4dc0b5;
    border-color:#4dc0b5;
}
.buttons-print {
    color:#212529;
    background-color:#9561e2;
    border-color:#9561e2;
}
</style>
<script>
    $(document).ready(() => {
        $("#report-table").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    });

</script>
