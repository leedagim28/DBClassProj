<Head>
	<title> View Customer Information </title>
</Head>
<font size="+8">CUSTOMER TABLE:</font> <br> <br>

<cfquery name="viewcustomer" datasource="language" dbtype="ODBC">
select * from customer
</cfquery>

<Cfoutput query="viewcustomer">

Customer Name	: #customer_name# 
Customer Street	: #customer_street#
Customer City	: #customer_city# <br>
</CFOutput>

<P align=center></p>

<P align=center><A href="http://localhost:8500/CSC570WebDB/SampleWebSite.htm">Back to Home</A></P>
