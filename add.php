<cfquery name="addcustomer" datasource="language" dbtype="ODBC" username="root" password="Leedagim75044">

insert into customer values('#customer_name#','#customer_street#','#customer_city#')
</cfquery>


<Head>
	<title> Add Language </title>
</Head>
<Body>
<h1> Your language has successfully been added!</h1><br>

</Body>
</html>