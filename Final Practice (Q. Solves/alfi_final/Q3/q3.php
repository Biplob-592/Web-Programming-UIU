<?php

    $conn = mysqli_connect("127.0.0.1", "root", "", "uiutech_final", 3306);


     $query1 = "select PerformanceRating, count(EmployeeID) as total_no
                from  employee_final
                group by  PerformanceRating;" ;

    
    $store = $conn->query($query1);


    while($show = $store->fetch_assoc()){
        echo $show['PerformanceRating'] . "---> " . $show['total_no'] . "<br>";
    }

    $query2 = "update employee_final
               set PerformanceRating ='C'
               where Salary<40000 and PerformanceRating!='D';" ;

    $store = $conn->query($query2);

    $query3 = "update employee_final
               set Salary = Salary+5000
               where Salary>50000 and Salary+5000<60000;" ;

    $store = $conn->query($query3);


    $query4 = "select DepartmentName,count(EmployeeID) as total_emp
               from employee_final
               group by DepartmentName
               order by total_emp desc;" ;

    $store = $conn->query($query4);

    while($show = $store->fetch_assoc()){
        echo $show['DepartmentName'] . "---> " . $show['total_emp'] . "<br>";
    }







?>