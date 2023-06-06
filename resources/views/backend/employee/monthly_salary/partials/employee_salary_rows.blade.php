 @foreach ($employeeData as $data)
     <tr>
         <td>{{ $data['employee_code'] }}</td>
         <td>{{ $data['name'] }}</td>
         <td id="td{{ $data['employee_id'] }}">
             @if ($data['pdf_file'] == null)
                 <form id="uploadForm{{ $data['employee_id'] }}" action="">
                     @csrf
                     <input type="hidden" name="employee_id" value="{{ $data['employee_id'] }}" />
                     <input type="hidden" name="month_year" value="{{ $data['month'] }}" />
                     <input type="file" name="pdf_file" id="salary_pdf{{ $data['employee_id'] }}"
                         accept="application/pdf">
                     <button id="btn_upload{{ $data['employee_id'] }}"
                         class="btn_upload btn btn-primary sr-only">Upload</button>
                 </form>
                 <script>
                     $(document).ready(function() {
                         $('#salary_pdf{{ $data['employee_id'] }}').on('change', function() {
                             $('#btn_upload{{ $data['employee_id'] }}').removeClass('sr-only');
                         });
                         $('#btn_upload{{ $data['employee_id'] }}').on('click', function(e) {
                             e.preventDefault();
                             var formData = new FormData($('#uploadForm{{ $data['employee_id'] }}')[0]);
                             $.ajax({
                                 url: "{{ route('monthly.salary.upload') }}",
                                 type: "POST",
                                 _token: '{{ csrf_token() }}',
                                 data: formData,
                                 contentType: false,
                                 processData: false,
                                 success: function(data) {
                                     console.log(data);
                                     if (data.status == true) {
                                         toastr.success(data.message);
                                         $('#salary_pdf{{ $data['employee_id'] }}').addClass('sr-only');
                                         $('#btn_upload{{ $data['employee_id'] }}').addClass('sr-only');
                                         var download_url = "{{ asset('employee/salary_pdf') }}";
                                         download_url = download_url + '/' + data.pdf_file;
                                         var html =
                                             '<a class="btn btn-sm btn-success" id="load_slip" data-month="{{ $data['month'] }}" ' +
                                             ' title="PaySlip"  target="_blank" href="' + download_url +
                                             '">Download</a>';

                                         $('#td{{ $data['employee_id'] }}').html(html);

                                     } else {
                                         toastr.error(data.message);
                                     }
                                 }
                             });
                         });
                     });
                 </script>
             @else
               
                 <a class="btn btn-sm btn-success" id="load_slip" data-month="{{ $data['month'] }}" title="PaySlip"
                     target="_blank" href="{{ asset('employee/salary_pdf/' . $data['pdf_file']) }}">Download</a>
             @endif
         </td>
     </tr>
 @endforeach
