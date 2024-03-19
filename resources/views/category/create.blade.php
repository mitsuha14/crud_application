<h4>Hello Category</h4>

<div class="title">
    Add CATEGORIES
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Categories</h4>
                    <a href="{{ url('categories') }}" class="btn btn-primry float end">Back</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('categories/create') }}" method="POST">
                        @csrf

                        <div>
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}" />
                        </div>

                        <div>
                            <label>Description</label>
                            <input type="text" name="name" value="{{ old('name') }}" />
                            <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                        </div>

                        <div>
                            <label>Is Active</label>
                            <input type="checkbox" name="is_active" {{ old('is_active') == true ? checked:'' }} />
                        </div>

                        <div>
                            <button type="submit">Save</button>
                        </div>

                        



                    </form>


                </div>
            </div>
        </div>
    </div>
</div>