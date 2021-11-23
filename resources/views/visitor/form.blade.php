<form action="{{ route('visitors.store') }}" method="post">
    @csrf
    @method('post')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input id="name" name="name" type="text" class="form-control form-control-sm">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="id_number">Cid/Passport/Registration Number</label>
                    <input id="id_number" name="id_number" type="text" class="form-control form-control-sm">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input id="phone" name="phone" type="text" class="form-control form-control-sm">
                    <small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                </div>
            </div>
            <div class="col">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="form-group form-check mt-4">
                                <input type="checkbox" class="form-check-input" id="group-check" name="form-checkbox">
                                <label class="form-check-label" for="group-check">Group</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group d-none" id="head-count">
                                <label for="head-count">Head count</label>
                                <input name="head_count" type="number" class="form-control form-control-sm" min=1
                                    value="1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-success btn-sm">Check In</button>
</form>

<script>
    $(document).ready(() => {
        $("#group-check").click(() => {
            $('#head-count').toggleClass('d-none');
        });
    });

</script>
