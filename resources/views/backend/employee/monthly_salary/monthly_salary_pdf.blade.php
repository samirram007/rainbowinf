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
      <td width="50%">Employee Monthly Salary </td>
      <td style="text-align:right;"><h2>Wish School</h2>
      
           <p>Address</p>
          <p>Phone : 8240707689</p>
          <p>Email : school@gmail.com</p>
          
  
      </td>
    </tr>
  </table>
  {{-- @dd($details) --}}

  @php
     //$month = $month; 
        if ($month != '') {
            $where[] = ['date', 'like', $month . '%'];
        }
 
            $totalAttend = App\Models\EmployeeAttendance::with(['user'])
                ->where($where)
                ->where('employee_id', $details[0]->employee_id)
                ->get();
            $absentCount = count($totalAttend->where('attend_status', 'Absent'));
             

            $salary=(double)$details[0]['user']['salary'];
            $salaryPerDay=(double)$salary/30;
            $totalSalaryMinus=(double)$absentCount*(double)$salaryPerDay;
            $totalSalary=(double)$salary-(double)$totalSalaryMinus;
            
        
  @endphp
<table id="pdf-table" >
  <tr>
    <th width="10%">SL</th>
    <th width="35%">Employee Details</th>
    <th width="55%">Employee Data</th>
  </tr>
  @php
    $a=0;
  @endphp
  <tr>
    <td>{{ ++$a }}</td>
    <td>Employee Name</td>
    <td>{{$details[0]['user']['name']}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Id No</td>
    <td>{{$details[0]['user']['id_no']}}</td>
  </tr>
 <tr>
    <td>{{ ++$a }}</td>
    <td>Designation</td>
    <td>{{     $details[0]['user']['designation']['name']}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Basic Salary</td>
    <td>{{$details[0]['user']['salary'] }} {{env('APP_CURRENCY')}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Total Absent For This Month</td>
    <td>{{$absentCount}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td>Month</td>
    <td>{{date('M Y',strtotime($month))}}</td>
  </tr>
  <tr>
    <td>{{ ++$a }}</td>
    <td> Salary This Month</td>
    <td>{{ $totalSalary }} {{env('APP_CURRENCY')}}</td>
  </tr>
 
   
  
  
   
</table>
<br>

<htmlpagefooter name="page-footer">
  <i style="font-size: 10px; float:right;">Print Data:{{ date("d M Y")}}</i>
</htmlpagefooter>
</body>
</html>


