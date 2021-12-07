<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<button id="clear" class="btn btn-sm btn-clear mb-3 ml-auto">Clear report</button>
<table id="report-table" class="table table-bordered table-sm table-hover table-responsive-md">
    <thead>
        <tr class="text-green">
            <th scope="col">Token</th>
            <th scope="col">Cid/Passport/Registation Number</th>
            <th scope="col">Full Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Head Count</th>
            <th scope="col">Check in Date</th>
            <th scope="col">Check out Date</th>

            <!-- <th scope="col">checked out</th> -->
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

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
        color: white;
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
    .btn-clear {
        color: #38c172 ;
        border-color: #38c172;
    }
    .btn-clear:hover {
        color: white ;
        background-color: #38c172;
        border-color: #38c172;
    }
    .dt-button:hover {
        opacity: 0.5;
    }

    .paginate_button:hover {
        background-color: white;
    }

    .buttons-copy {
        color: white;
        background-color: #ffed4a;
        border-color: #ffed4a;
    }

    .buttons-csv {
        color: white;
        background-color: #3490dc;
        border-color: #3490dc;
    }

    .buttons-excel {
        color: white;
        background-color: #38c172;
        border-color: #38c172;
    }

    .buttons-pdf {
        color: white;
        background-color: #4dc0b5;
        border-color: #4dc0b5;
    }

    .buttons-print {
        color: white;
        background-color: #9561e2;
        border-color: #9561e2;
    }

    .text-green {
        color: #38c172;
    }

</style>
<script>
    $(document).ready(() => {
        $('#clear').on('click', () => {
            $("#report-table").DataTable().destroy();
            $("#report-table > tbody"). empty();
        });
        $('#get-report-btn').click((e) => {
            e.preventDefault();
            console.log($('#start_date').val());
            console.log($('#end_date').val());
            $("#report-table").DataTable().destroy();
            $("#report-table").DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('getreport') }}",
                    data: {
                        'start_date': $('#start_date').val(),
                        'end_date': $('#end_date').val()
                    }
                },
                columns: [
                    {
                        data: 'token',
                        name: 'token'
                    },
                    {
                        data: 'id_number',
                        name: 'id_number'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'head_count',
                        name: 'head_count'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at'
                    }
                ],
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    });

</script>
