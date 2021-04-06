function validador(contactform){
    if(contactform.nome.value==""){
        alert("Por favor, digite o nome.");
        return false;
    }
    if(contactform.cargo.value==""){
        alert("Por favor, digite o cargo.");
        return false;
    }
    if(contactform.telefone.value==""){
        alert("Por favor, digite o telefone.");
        return false;
    }
    if(contactform.celular.value==""){
        alert("Por favor, digite o celular.");
        return false;
    }
    if(contactform.email.value==""){
        alert("Por favor, digite o email.");
        return false;
    }
    if(contactform.empresa.value==""){
        alert("Por favor, digite a empresa.");
        return false;
    }
    if(contactform.endereco.value==""){
        alert("Por favor, digite o endereço da empresa.");
        return false;
    }
    if(contactform.cendereco.value==""){
        alert("Por favor, digite o complemento do endereço.");
        return false;
    }
    return true;
}