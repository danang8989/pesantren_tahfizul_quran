@extends('layouts.web')

@section('content')
    @include('components.web.jumbotron', ['title' => 'Syarat Pendaftaran'])

    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <form action="{{ route('user.data.insert') }}" method="POST">
                        @csrf @method('POST')
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">DATA DIRI</label>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">NISN</label>
                                <input type="text" value="{{ $student->nisn }}" name="nisn" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" value="{{ $student->name }}" name="name" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">Email</label>
                                <input type="text" value="{{ $student->email }}" name="email" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">NO. Telefon</label>
                                <input type="text" value="{{ $student->phone_number }}" name="title" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">Alamat Detail</label>
                                <input type="text" value="{{ $student->address }}" name="address" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">Kode Pos</label>
                                <input type="text" value="{{ $student->postal_code }}" name="postal_code" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">Anak Ke-</label>
                                <input type="text" value="{{ $student->kids_order }}" name="kids_order" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>                    
                            <div class="mb-3 col-md-12">
                                <label for="photo" class="form-label">Pas Photo 3x4</label>
                                <input type="file" name="photo" class="form-control form-control-sm" id="height">
                            </div>
        
                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">Pilih Jurusan Yang diinginkan</label>
                                <select name="department_id" id="" class="form-control form-control-sm">
                                    <option value="">-Silahkan Pilih-</option>
                                    @foreach ($department as $item)
                                        <option value="{{ $item->id }}" 
                                        @if ($student->department_id != null)
                                            @if ($student->department_id == $item->id)
                                                selected
                                            @endif
                                        @endif>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">DATA BERKAS</label>
                            </div>
                        
                            <div class="mb-3 col-12">
                                <label for="name" class="form-label">Fotokopi KK</label>
                                <input type="file" name="fc_kk" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-12">
                                <label for="name" class="form-label">Fotokopi Akte</label>
                                <input type="file" name="fc_akte" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-12">
                                <label for="name" class="form-label">Fotokopi SKHU</label>
                                <input type="file" name="fc_skhu" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-12">
                                <label for="name" class="form-label">Fotokopi Rapot</label>
                                <input type="file" name="fc_rapot" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-12">
                                <label for="name" class="form-label">Pas Photo 3x4</label>
                                <input type="file" name="fc_photo" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>

                            <div class="mb-3 col-md-12">
                                <label for="name" class="form-label">DATA ORANG TUA</label>
                            </div>

                            <div class="mb-3 col-12">
                                <label for="name" class="form-label">Nama Ayah</label>
                                <input type="text" name="father_name" value="@if ($student_parent != null)  {{ $student_parent->father_name }}  @endif" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>

                            
                            <div class="mb-3 col-12">
                                <label for="name" class="form-label">Tanggal Lahir Ayah</label>
                                <input type="date" name="father_date_birth" value="@if ($student_parent != null)  {{ $student_parent->father_date_birth }}  @endif" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-12">
                                <label for="name" class="form-label">Pekerjaan Ayah</label>
                                <select name="father_occ" id="" class="form-control form-control-sm">
                                    <option value="">-Silahkan Pilih-</option>
                                    <option value="Polri"
                                        @if ($student_parent != null)  
                                            @if ($student_parent->father_occ == "Polri")
                                                selected
                                            @endif
                                        @endif
                                    >Polri</option>
                                    <option value="Wiraswasta"
                                        @if ($student_parent != null)  
                                            @if ($student_parent->father_occ == "Wiraswasta")
                                                selected
                                            @endif
                                        @endif    
                                    >Wiraswasta</option>
                                    <option value="Pengusaha"
                                    @if ($student_parent != null)  
                                        @if ($student_parent->father_occ == "Pengusaha")
                                            selected
                                        @endif
                                    @endif>Pengusaha</option>
                                    <option value="Petani"
                                    @if ($student_parent != null)  
                                        @if ($student_parent->father_occ == "Petani")
                                            selected
                                        @endif
                                    @endif
                                    >Petani</option>
                                    <option value="Buruh"
                                    @if ($student_parent != null)  
                                        @if ($student_parent->father_occ == "Buruh")
                                            selected
                                        @endif
                                    @endif
                                    >Buruh</option>
                                    <option value="Guru"
                                    @if ($student_parent != null)  
                                        @if ($student_parent->father_occ == "Guru")
                                            selected
                                        @endif
                                    @endif>Guru</option>
                                    <option value="dll"
                                    @if ($student_parent != null)  
                                        @if ($student_parent->father_occ == "dll")
                                            selected
                                        @endif
                                    @endif>Dan Lain-lain</option>
                                </select>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="name" class="form-label">Tamatan Akhir Ayah</label>
                                <select name="father_la" id="" class="form-control form-control-sm">
                                    <option value="">-Silahkan Pilih-</option>
                                    <option value="SD"
                                        @if ($student_parent != null)  
                                            @if ($student_parent->father_la == "SD")
                                                selected
                                            @endif
                                        @endif>SD</option>
                                    <option value="SMP"
                                        @if ($student_parent != null)  
                                            @if ($student_parent->father_la == "SMP")
                                                selected
                                            @endif
                                        @endif>SMP</option>
                                    <option value="SMA/SLTA/SMK/Sederajat"
                                        @if ($student_parent != null)  
                                            @if ($student_parent->father_la == "SMA/SLTA/SMK/Sederajat")
                                                selected
                                            @endif
                                        @endif>SMA/SLTA/SMK/Sederajat</option>
                                    <option value="Pendidikan Tinggi"
                                        @if ($student_parent != null)  
                                            @if ($student_parent->father_la == "Pendidikan Tinggi")
                                                selected
                                            @endif
                                        @endif>Pendidikan Tinggi</option>
                                </select>
                            </div>
        
                            <div class="mb-3 col-12">
                                <label for="name" class="form-label">Nama Ibu</label>
                                <input type="text" name="mother_name"  value="@if ($student_parent != null)  {{ $student_parent->mother_name }}  @endif" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-12">
                                <label for="name" class="form-label">Tanggl Lahir Ibu</label>
                                <input type="date" name="mother_date_birth" value="@if ($student_parent != null){{ $student_parent->mother_date_birth }}@endif" class="form-control form-control-sm" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 col-12">
                                <label for="name" class="form-label">Pekerjaan Ibu</label>
                                <select name="mother_occ" id="" class="form-control form-control-sm">
                                    <option value="">-Silahkan Pilih-</option>
                                    <option value="Polri"
                                        @if ($student_parent != null)  
                                            @if ($student_parent->mother_occ == "Polri")
                                                selected
                                            @endif
                                        @endif
                                    >Polri</option>
                                    <option value="Wiraswasta"
                                        @if ($student_parent != null)  
                                            @if ($student_parent->mother_occ == "Wiraswasta")
                                                selected
                                            @endif
                                        @endif    
                                    >Wiraswasta</option>
                                    <option value="Pengusaha"
                                    @if ($student_parent != null)  
                                        @if ($student_parent->mother_occ == "Pengusaha")
                                            selected
                                        @endif
                                    @endif>Pengusaha</option>
                                    <option value="Petani"
                                    @if ($student_parent != null)  
                                        @if ($student_parent->mother_occ == "Petani")
                                            selected
                                        @endif
                                    @endif
                                    >Petani</option>
                                    <option value="Buruh"
                                    @if ($student_parent != null)  
                                        @if ($student_parent->mother_occ == "Buruh")
                                            selected
                                        @endif
                                    @endif
                                    >Buruh</option>
                                    <option value="Guru"
                                    @if ($student_parent != null)  
                                        @if ($student_parent->mother_occ == "Guru")
                                            selected
                                        @endif
                                    @endif>Guru</option>
                                    <option value="dll"
                                    @if ($student_parent != null)  
                                        @if ($student_parent->mother_occ == "dll")
                                            selected
                                        @endif
                                    @endif>Dan Lain-lain</option>
                                </select>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="name" class="form-label">Tamatan Akhir Ibu</label>
                                <select name="mother_la" id="" class="form-control form-control-sm">
                                    <option value="">-Silahkan Pilih-</option>
                                    <option value="SD"
                                        @if ($student_parent != null)  
                                            @if ($student_parent->mother_la == "SD")
                                                selected
                                            @endif
                                        @endif>SD</option>
                                    <option value="SMP"
                                        @if ($student_parent != null)  
                                            @if ($student_parent->mother_la == "SMP")
                                                selected
                                            @endif
                                        @endif>SMP</option>
                                    <option value="SMA/SLTA/SMK/Sederajat"
                                        @if ($student_parent != null)  
                                            @if ($student_parent->mother_la == "SMA/SLTA/SMK/Sederajat")
                                                selected
                                            @endif
                                        @endif>SMA/SLTA/SMK/Sederajat</option>
                                    <option value="Pendidikan Tinggi"
                                        @if ($student_parent != null)  
                                            @if ($student_parent->mother_la == "Pendidikan Tinggi")
                                                selected
                                            @endif
                                        @endif>Pendidikan Tinggi</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- /.untree_co-section -->
    

@endsection