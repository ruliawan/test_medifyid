<form action="{{ route('category.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Kategori</label>
        <input type="text" class="form-control" name="name_category" required  value="">
    </div>
    <div class="form-group">
        <label>Kode Kategori</label>
        <input type="text" maxlength="5" class="form-control" name="code_category" required  value="">
    </div>
    <button class="btn btn-primary mt-3">Submit</button>
</form>