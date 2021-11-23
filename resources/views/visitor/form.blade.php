<form action="{{ route('visitors.store')}}" method="post">
    @csrf
    @method('post')
    <div class="form-group">
        <label for="name">Full Name</label>
        <input id="name" name="name" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="id_number">Cid/Passport/Registration Number</label>
        <input id="id_number" name="id_number" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input id="phone" name="phone" type="text" class="form-control">
        <small class="form-text text-muted">We'll never share your phone number with anyone else.</small>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="group-check" name="form-checkbox" checked>
        <label class="form-check-label" for="group-check">Group</label>
    </div>
    <div class="form-group" id="head-count">
        <label for="head-count">Head count</label>
        <input name="head_count" type="number" class="form-control" min=1 value="1">
    </div>
    <button type="submit" class="btn btn-success">Check Out</button>
</form>

<script>
    $(document).ready( () => {
        $("#group-check").click( () => {
            $('#head-count').toggleClass('d-none');
        });
    });
</script>