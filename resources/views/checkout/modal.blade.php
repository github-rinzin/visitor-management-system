<!-- Button trigger modal -->
<a href="#" class="nav-link text-light" data-toggle="modal" data-target="#checkoutModal">
    Checkout
</a>

<!-- Modal -->
<div class="modal fade" id="checkoutModal" tabindex="-1" role="dialog" aria-labelledby="checkoutModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="checkoutModalLabel">Check Out</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('checkouts.store') }}" method="post" class="mx-auto">
                    @csrf
                    <div class="form-group">
                        <label for="">Token</label>
                        <input type="text" name="token" class="form-control form-control-sm">
                    </div>
                    <button type="submit" class="btn btn-sm btn-success">Checkout</button>
                </form>
            </div>
        </div>
    </div>
</div>
