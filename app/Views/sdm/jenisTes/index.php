<?=$this->extend('layout/page/pageLayout')?>
<?=$this->section('content')?>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-content-center py-4">
            <div class="align-content-center">
              <br>
              <br>
                <a href="/masterdata/jenistes/create" class="button" class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg>&nbsp;&nbsp;&nbsp;&nbsp;
                    TAMBAH TES
                </a>
                <br>
                <br>
              <table style="width: 100%; border: 1px solid black; border-collapse: collapse;" cellpadding="10">
        <thead>
            <tr class="tr">
                <th style="border: 1px solid black;">No</th>
                <th style="border: 1px solid black;">Nama Tes</th>
                <th style="border: 1px solid black;">Is Online</th>
                <th style="border: 1px solid black;">Is Wawancara</th>
                <th style="border: 1px solid black;">Status</th>
                <th style="border: 1px solid black;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border: 1px solid black;">1</td>
                <td style="border: 1px solid black;">Tes User 1</td>
                <td style="border: 1px solid black;">Yes</td>
                <td style="border: 1px solid black;">Yes</td>
                <td style="border: 1px solid black;">Aktif</td>
                <td style="border: 1px solid black;">
                   <button type="button" class="btn btn-warning">Detail</button>
                   <button type="button" class="btn btn-info">Edit</button>
                   <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black;">2</td>
                <td style="border: 1px solid black;">Tes User 2</td>
                <td style="border: 1px solid black;">Yes</td>
                <td style="border: 1px solid black;">Yes</td>
                <td style="border: 1px solid black;">Aktif</td>
                <td style="border: 1px solid black;">
                  <button type="button" class="btn btn-warning">Detail</button>
                   <button type="button" class="btn btn-info">Edit</button>
                   <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?=$this->endSection()?>