function consulta(estado) {
    var estados=Array('Acre','Alagoas','Amapá','Amazonas','Bahia','Ceará','Distrito Federal','Espírito Santo','Goiás','Maranhão','Mato Grosso','Mato Grosso do Sul','Minas Gerais','Pará','Paraíba','Paraná','Pernambuco','Piauí','Rio de Janeiro','Rio Grande do Norte','Rio Grande do Sul','Rondônia','Roraima','Santa Catarina','São Paulo','Sergipe','Tocantins');
    var sigla = document.getElementById(estado).value;
    var sigla_m= sigla.toUpperCase();
    if (sigla_m== 'AC') {
        return (estados[0]);
    }
    if (sigla_m == 'AL') {
        return (estados[1]);
    }
    if (sigla_m == 'AP') {
        return (estados[2]);
    }
    if (sigla_m == 'AM') {
        return (estados[3]);
    }
    if (sigla_m == 'BA') {
        return (estados[4]);
    }
    if (sigla_m == 'CE') {
        return (estados[5]);
    }
    if (sigla_m == 'DF') {
        return (estados[6]);
    }
    if (sigla_m == 'ES') {
        return (estados[7]);
    }
    if (sigla_m == 'GO') {
        return (estados[8]);
    }
    if (sigla_m == 'MA') {
        return (estados[9]);
    }
    if (sigla_m == 'MT') {
        return (estados[10]);
    }
    if (sigla_m == 'MS') {
        return (estados[11]);
    }
    if (sigla_m == 'MG') {
        return (estados[12]);
    }
    if (sigla_m == 'PA') {
        return (estados[13]);
    }
    if (sigla_m == 'PB') {
        return (estados[14]);
    }
    if (sigla_m == 'PR') {
        return (estados[15]);
    }
    if (sigla_m == 'PE') {
        return (estados[16]);
    }
    if (sigla_m == 'PI') {
        return (estados[17]);
    }
    if (sigla_m == 'RJ') {
        return (estados[18]);
    }
    if (sigla_m == 'RN') {
        return (estados[19]);
    }
    if (sigla_m == 'RS') {
        return (estados[20]);
    }
    if (sigla_m == 'RO') {
        return (estados[21]);
    }
    if (sigla_m == 'RR') {
        return (estados[22]);
    }
    if (sigla_m == 'SC') {
        return (estados[23]);
    }
    if (sigla_m == 'SP') {
        return (estados[24]);
    }
    if (sigla_m == 'SE') {
        return (estados[25]);
    }
    if (sigla_m == 'TO') {
        return (estados[26]);
    }
}
