<!DOCTYPE html>
<html>
<head>
<style>
  @page {
  header: page-header;
  footer: page-footer;
}
#pdf-table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#pdf-table td, #pdf-table th {
  border: 1px solid #ddd;
  padding: 8px;
}

#pdf-table tr:nth-child(even){background-color: #f2f2f2;}

#pdf-table tr:hover {background-color: #ddd;}

#pdf-table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #045e88;
  color: white;
}
</style>
</head>
<body>

  <htmlpageheader name="page-header">
   
  </htmlpageheader>
  <table id="pdf-table" >
    <tr>
      <td width="50%">School Management ERP </td>
      <td style="text-align:right;"><h2>Wish School</h2>
      
           <p>Address</p>
          <p>Phone : 8240707689</p>
          <p>Email : school@gmail.com</p>
  
      </td>
    </tr>
  </table>

<table id="pdf-table" >
  <tr>
    <th width="10%">SL</th>
    <th width="25%">Employee Details</th>
    <th width="65%">EmployeeData</th>
  </tr>
  @php
    $a=0;
  @endphp
  <tr>
    <td>{{ ++$a }}</td>
    <td>Employee Name</td>
    <td>{{$details->name}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Employee Id No</td>
    <td>{{$details->id_no}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Role</td>
    <td>{{$details->usertype}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Father's Name</td>
    <td>{{$details->father_name}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Mother's Name</td>
    <td>{{$details->mother_name}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Mobile Number</td>
    <td>{{$details->mobile}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Address</td>
    <td>{{$details->address}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Email</td>
    <td>{{$details->email}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Gender</td>
    <td>{{$details->gender}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Religion</td>
    <td>{{$details->religion}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Nationality</td>
    <td>{{$details->nationality}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Date of Birth</td>
    <td>{{    \Carbon\Carbon::parse( $details->dob )->format('d-M-Y')}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Joining Date</td>
    <td>{{    \Carbon\Carbon::parse( $details->join_date )->format('d-M-Y')}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Designation</td>
    <td>{{     $details['designation']['name']}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Salary</td>
    <td>{{$details->salary }} {{env('APP_CURRENCY')}}</td>
  </tr>
   
  
  
   
</table>
<br>

<htmlpagefooter name="page-footer">
  <i style="font-size: 10px; float:right;">Print Data:{{ date("d M Y")}}</i>
</htmlpagefooter>
</body>
</html>


