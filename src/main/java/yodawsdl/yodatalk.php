<?xml version="1.0" encoding="ISO-8859-1"?>
<definitions xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" xmlns:tns="urn:http://www.yodaspeak.co.uk/webservice/yodatalk" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" xmlns="http://schemas.xmlsoap.org/wsdl/" targetNamespace="urn:http://www.yodaspeak.co.uk/webservice/yodatalk">
<types>
<xsd:schema targetNamespace="urn:http://www.yodaspeak.co.uk/webservice/yodatalk"
>
 <xsd:import namespace="http://schemas.xmlsoap.org/soap/encoding/" />
 <xsd:import namespace="http://schemas.xmlsoap.org/wsdl/" />
</xsd:schema>
</types>
<message name="yodaTalkRequest">
  <part name="inputText" type="xsd:string" /></message>
<message name="yodaTalkResponse">
  <part name="return" type="xsd:string" /></message>
<portType name="http://www.yodaspeak.co.uk/webservice/yodatalkPortType">
  <operation name="yodaTalk">
    <documentation>Pass any string and it will be returned as Yoda-Speak.</documentation>
    <input message="tns:yodaTalkRequest"/>
    <output message="tns:yodaTalkResponse"/>
  </operation>
</portType>
<binding name="http://www.yodaspeak.co.uk/webservice/yodatalkBinding" type="tns:http://www.yodaspeak.co.uk/webservice/yodatalkPortType">
  <soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http"/>
  <operation name="yodaTalk">
    <soap:operation soapAction="uri:http://www.yodaspeak.co.uk/webservice/yodatalk#yodaTalk" style="rpc"/>
    <input><soap:body use="literal" namespace="uri:http://www.yodaspeak.co.uk/webservice/yodatalk"/></input>
    <output><soap:body use="literal" namespace="uri:http://www.yodaspeak.co.uk/webservice/yodatalk"/></output>
  </operation>
</binding>
<service name="http://www.yodaspeak.co.uk/webservice/yodatalk">
  <port name="http://www.yodaspeak.co.uk/webservice/yodatalkPort" binding="tns:http://www.yodaspeak.co.uk/webservice/yodatalkBinding">
    <soap:address location="http://yodaspeak.co.uk/webservice/yodatalk.php"/>
  </port>
</service>
</definitions>