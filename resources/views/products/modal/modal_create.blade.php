<div class="modal fade" id="modal-add-new-product" tabindex="-1" aria-labelledby="exampleModalLiveLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLiveLabel">Modal title</h5>
                <button class="btn-close" type="button" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('productos.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre del producto</label>
                        <input id="name" type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <input id="price" type="text" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label for="category">Categoria</label>
                        <select name="categories_id" id="category">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="stock">Cantidad</label>
                        <input id="stock" type="number" class="form-control" name="stock">
                    </div>
                    <div class="form-group">
                        <label for="img">Imagen</label>
                        <input id="img" type="file" class="form-control" name="img">
                    </div>

                    <hr>
                    <button class="btn btn-primary btn-sm">Guardar cambios</button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-toolbar btn-sm" type="button" data-coreui-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php
