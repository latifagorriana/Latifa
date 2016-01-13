<div class="form-group">
        <label for="prodi" class="control-label col-xs-2">Minuman</label>
        <div class="col-xs-3">
            <select name="jenis" >
                @foreach($menu->where('jenis','minuman')->lists("nama","id") as  $int => $nama )
                    <option value="{{$int}}"> {{$nama}}</option>
                @endforeach      
            </select>
        </div>
    </div> 