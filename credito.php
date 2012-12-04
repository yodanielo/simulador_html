<?php
$cabecera = '<script src="Script/Script.js" type="text/javascript"></script>';
include 'header.php';
?>
<div class="formulario">          
    <table class="form">
        <tbody>
            <tr>
                <td class="label">
                    <label>Tipo Producto de Crédito</label>
                </td>
                <td class="input">
                    <select id="cboTipoProductoCredito" name="cboTipoProductoCredito">
                    </select>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label>Producto</label>
                </td>
                <td class="input">
                    <select id="cboProducto" name="cboProducto">

                    </select>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label>Agencia de Solicitud</label>
                </td>
                <td class="input">
                    <select id="cboAgencia" name="cboAgencia">

                    </select>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label>Monto</label>
                </td>
                <td class="input">
                    <input type="text" class="numerico" onkeypress="return isNumberKey(event)">
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label>Moneda</label>
                </td>
                <td class="input">
                    <table border="0">
                        <tbody><tr>
                                <td><label><input name="moneda" type="radio" value="1" checked="checked">Soles</label></td><td><label><input name="moneda" type="radio" value="2">Dólares</label></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label>Nro de Cuotas</label>
                </td>
                <td class="input">
                    <input type="text" class="numerico" onkeypress="return isNumberKey(event)">
                </td>
            </tr>
            <tr>
                <td class="label">
                    <label>Tasa General</label>
                </td>
                <td class="input">
                    <select id="cboTasaGeneral" name="cboTasaGeneral" style="width: 156px;">
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Calcular" class="button">
                </td>
            </tr>
        </tbody>
    </table>

</div>
<script>
	getCboTipoProductoCredito("#cboTipoProductoCredito");
	getCboProducto("#cboProducto");
	getCboAgencia("#cboAgencia");
	getCboTasaGeneral("#cboTasaGeneral");
</script>
<?php
include 'footer.php';
?>