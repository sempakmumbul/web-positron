@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light min-vh-100">
        <div class="container">
            <h2 class="text-center fw-bold mb-4 animate__animated animate__fadeInDown">Kontak Mentor POSITRON 2025</h2>
            <p class="text-center text-muted mb-5 animate__animated animate__fadeIn animate__delay-1s">
                Silakan hubungi CP Prodi atau Kakak Mentor kelompokmu untuk bergabung ke grup POSITRON.
            </p>

            <!-- CP Prodi Flip Cards -->
            <section class="d-flex align-items-center py-5 bg-white" style="min-height: 100vh;">
                <div class="container">
                    <h3 class="text-center mb-5">Contact Person Program Studi di Departemen Teknik Elektro dan Informatika
                    </h3>
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        @php
                            $cpProdi = [
                                [
                                    'prodi' => 'S1 Pendidikan Teknik Informatika',
                                    'icon' => 'bi-journal-code',
                                    'nama_cp' => 'Alya Pratama',
                                    'wa' => '6281234567890',
                                ],
                                [
                                    'prodi' => 'S1 Teknik Informatika',
                                    'icon' => 'bi-laptop',
                                    'nama_cp' => 'Bagus Dwi',
                                    'wa' => '6282234567890',
                                ],
                                [
                                    'prodi' => 'S1 Teknik Elektro',
                                    'icon' => 'bi-lightning-charge',
                                    'nama_cp' => 'Citra Lestari',
                                    'wa' => '6283234567890',
                                ],
                                [
                                    'prodi' => 'S1 Pendidikan Teknik Elektro',
                                    'icon' => 'bi-plug',
                                    'nama_cp' => 'Dimas Arya',
                                    'wa' => '6284234567890',
                                ],
                            ];
                        @endphp

                        @foreach ($cpProdi as $cp)
                            <div class="col">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <!-- Sisi Depan -->
                                        <div class="flip-card-front text-center">
                                            <i class="bi {{ $cp['icon'] }}"></i>
                                            <h5>{{ $cp['prodi'] }}</h5>
                                        </div>
                                        <!-- Sisi Belakang -->
                                        <div class="flip-card-back">
                                            <h5>{{ $cp['nama_cp'] }}</h5>
                                            <p>{{ $cp['prodi'] }}</p>
                                            <a href="https://wa.me/{{ $cp['wa'] }}" target="_blank"
                                                class="btn btn-light mt-2 px-3 py-1 rounded-pill">
                                                Chat via WhatsApp
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- Gaya Flip Card -->
            <style>
                .flip-card {
                    background-color: transparent;
                    width: 100%;
                    height: 250px;
                    perspective: 1000px;
                }

                .flip-card-inner {
                    position: relative;
                    width: 100%;
                    height: 100%;
                    transition: transform 0.6s ease;
                    transform-style: preserve-3d;
                }

                .flip-card:hover .flip-card-inner {
                    transform: rotateY(180deg);
                }

                .flip-card-front,
                .flip-card-back {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    border-radius: 12px;
                    backface-visibility: hidden;
                    background-color: white;
                    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                    padding: 24px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-direction: column;
                }

                .flip-card-front i {
                    font-size: 2rem;
                    color: #0d6efd;
                    margin-bottom: 10px;
                }

                .flip-card-back {
                    background-color: #0d6efd;
                    color: white;
                    transform: rotateY(180deg);
                    text-align: center;
                }

                .flip-card h5 {
                    margin-bottom: 10px;
                    font-weight: 600;
                }

                .flip-card p {
                    font-size: 14px;
                    margin: 0;
                }

                .flip-card a.btn {
                    font-size: 0.9rem;
                    font-weight: 500;
                }
            </style>



            <!-- Kakak Mentor Tabel -->
            <div class="mb-5">
                <h4 class="fw-semibold mb-3 text-primary border-bottom pb-2">👥 Daftar Kakak Mentor per Kelompok</h4>

                <!-- Filter -->
                <div class="row mb-3">
                    <div class="col-md-6 mx-auto">
                        <input type="text" id="searchMentor" class="form-control form-control-lg"
                            placeholder="Cari berdasarkan nama atau kelompok...">
                    </div>
                </div>

                <div class="table-responsive animate__animated animate__fadeIn animate__delay-1s">
                    <table id="mentorTable"
                        class="table table-bordered table-hover bg-white shadow-sm rounded-3 text-center">
                        <thead class="table-dark text-white">
                            <tr>
                                <th>Nama</th>
                                <th>Kelompok</th>
                                <th>WhatsApp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mentors as $mentor)
                                <tr>
                                    <td class="fw-semibold">{{ $mentor['nama'] }}</td>
                                    <td>Kelompok {{ $mentor['kelompok'] }}</td>
                                    <td>
                                        <a href="https://wa.me/{{ $mentor['wa'] }}"
                                            class="text-success fw-semibold text-decoration-none" target="_blank">
                                            <i class="bi bi-whatsapp me-1"></i>{{ $mentor['wa'] }}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endsection
        @section('scripts')
            <script>
                $(document).ready(function() {
                    var table = $('#mentorTable').DataTable({
                        paging: false,
                        info: false,
                        searching: true
                    });

                    $('#searchMentor').on('keyup', function() {
                        table.search(this.value).draw();
                    });
                });
            </script>
        @endsection
