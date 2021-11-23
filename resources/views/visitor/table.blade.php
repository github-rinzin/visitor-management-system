<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>


<table id="visitor-table" class="table table-bordered table-sm">
    <thead>
        <tr>
            <th scope="col">Cid/Passport/Registation Number</th>
            <th scope="col">Full Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Token</th>
            <th scope="col">Head Count</th>
            <th data-orderable="false" scope="col">Check In/Out</th>
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
                <td><button class="btn btn-sm btn-success">Check In</button></td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    $(document).ready(() => {
        $("#visitor-table").DataTable();
    });

</script>
