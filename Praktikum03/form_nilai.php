<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form>
  <div class="form-group row">
    <label for="nama-mahasiswa" class="col-4 col-form-label">Nama Mahasiswa</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-user"></i>
          </div>
        </div> 
        <input id="nama-mahasiswa" name="nama-mahasiswa" placeholder="Nama Mahasiswa" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="mata -kuliah" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="mata -kuliah" name="mata -kuliah" placeholder="Pemrograman Web 2" type="text" required="required" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai-uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calculator"></i>
          </div>
        </div> 
        <input id="nilai-uts" name="nilai-uts" placeholder="Masukan Nilai UTS Mahasiswa" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai-uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calculator"></i>
          </div>
        </div> 
        <input id="nilai-uas" name="nilai-uas" placeholder="Masukkan Nilai UAS Mahasiswa" type="text" class="form-control" required="required">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-calculator"></i>
          </div>
        </div> 
        <input id="nilai tugas" name="nilai tugas" placeholder="Masukkan Nilai Tugas Mahasiswa" type="text" class="form-control" required="required">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">simpan</button>
    </div>
  </div>
</form>