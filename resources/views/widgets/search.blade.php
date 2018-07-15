<div class="card my-4">
    <form method="get" action="{{ route('search.views') }}">
        <h5 class="card-header">Пошук</h5>
        <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Шукати...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button>
                </span>
            </div>
        </div>
    </form>
</div>