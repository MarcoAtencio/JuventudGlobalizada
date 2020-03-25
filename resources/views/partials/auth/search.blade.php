<form action="{{ route('employees.index') }}" method="GET">
    @csrf
    <div class="form-group">
        <div class="input-group">
            <input type="search" class="form-control" name="searchText" placeholder="Buscar..." value="">
            <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </span>
        </div>
    </div>
</form>

