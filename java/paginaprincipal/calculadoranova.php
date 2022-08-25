<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora com DOM</title>
    <script src="funcao.js"></script>
</head>
<body style="font-family: 'Courier New', Courier, monospace;">
    <table>
        <th colspan="4">Calculadora</th>
        <tr>
            <td colspan="2"><input type="text" id="va" size="4"></td>
            <td colspan="2"><input type="text" id="vb" size="4"></td>
        </tr>
        <tr>
            <td><input type="button" value="+" id="bmais" style = "width: 20px; height: 20px;" onclick="resultado.value=calcula('va','vb','+')"></td>
            
            <td><input type="button" value="-" id="bmenos" style = "width: 20px; height: 20px;" onclick="resultado.value=calcula('va','vb','-')"></td>
            
            <td><input type="button" value="*" id="bmult" style = "width: 20px; height: 20px;" onclick="resultado.value=calcula('va','vb','*')"></td>
            
            <td><input type="button" value="/" id="bdiv" style = "width: 20px; height: 20px;" onclick="resultado.value=calcula('va','vb','/')"></td>
        </tr>
        <tr>
            <td colspan="4" style="font-weight:bold; text-align: center;">
                <input type="text" id="resultado" value="0000" size="10">
            </td>
        </tr>
    </table>
</body>
</html>