<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Total Kas Saldo</h5>
                          <h1>Rp 73.455.000</h1>
                          <p class="mb-4">
                            You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                            your profile.
                          </p>

                          <a href="javascript:;" class="btn btn-sm btn-outline-primary">Lihat Riwayat</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="<?= base_url('assets/img/illustrations/man-with-laptop-light.png');?>"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- table -->
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <!-- Responsive Table -->
              <div class="card">
                <!-- <div class="card-body ">
                  <h5 class="card-header">Transaksi</h3> -->

                  <!-- Pemasukkan -->
                  <!-- <div class="d-inline-flex justify-content-between align-items-center ">
                    <p class="" style="margin:0; color: green"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: green;"><path d="M19.071 19.071c3.898-3.899 3.898-10.244 0-14.143-3.899-3.899-10.244-3.898-14.143 0-3.898 3.899-3.899 10.243 0 14.143 3.9 3.899 10.244 3.899 14.143 0zM8.464 8.464l2.829 2.829 3.535-3.536 1.414 1.414-3.535 3.536 2.828 2.829H8.464V8.464z"></path></svg></span> Pemasukkan: <b>Rp 34.500.000</b> </p>
                  </div> -->
                   <!-- //Pemasukkan -->


                  <!-- Pengeluaran -->
                  <!-- <div class="d-inline-flex justify-content-between align-items-center ">
                    <p class="" style="margin:0; color: red"><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: red;"><path d="M19.071 4.929c-3.899-3.898-10.243-3.898-14.143 0-3.898 3.899-3.898 10.244 0 14.143 3.899 3.898 10.243 3.898 14.143 0 3.899-3.9 3.899-10.244 0-14.143zm-3.536 10.607-2.828-2.829-3.535 3.536-1.414-1.414 3.535-3.536-2.828-2.829h7.07v7.072z"></path></svg></span> Pengeluaran: <b>Rp 20.000.000</b> </p>
                  </div> -->
                  <!-- //Pengeluaran -->
                 
                <!-- </div> -->
                <!-- //Card Body -->
                 <h4 class="card-header">Transaksi</h4>
           <div class="table-responsive card-datatable text-nowrap">
                  <table id="tabel-data" class="table">
                    <thead>
                      <tr class="text-nowrap">
                        <th>#</th>
                        <th>Id Transaksi</th>
                        <th>Tanggal</th>
                        <th>Cabang</th>
                        <th>Profit</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>#214142</td>
                        <td>24 Februari 2022</td>
                        <td>Toko Metro A</td>
                        <td>Rp 18.500.000</td>
                        <td>
                          <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #5F61E6;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"></path></svg>
                          View
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>#510636</td>
                        <td>23 Februari 2022</td>
                        <td>Toko Metro B</td>
                        <td>Rp 11.000.000</td>
                        <td>
                          <a href="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #5F61E6;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"></path></svg>
                          View
                          </a>
                        </td>
                      </tr>

                      <tr>
                        <th scope="row">3</th>
                        <td>#685812</td>
                        <td>18 Februari 2022</td>
                        <td>Toko Blok F</td>
                        <td>Rp 43. 955.000</td>
                        <td>
                          <a href="<?= base_url('index/detail_transaksi');?>">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: #5F61E6;"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"></path></svg>
                          View
                          </a>
                        </td>
                      </tr>

                      
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Responsive Table -->
                </div>
              </div>
            </div>
            <!-- / Content -->

            

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>


             
        <!-- / Layout page -->
      </div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->