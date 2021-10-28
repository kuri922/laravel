function check() {

  if(name_form.name.value == "" ){
      alert("名前を入力してください");
      return false
    }
  
    if(name_form.gender.value == ""){
      alert("性別を選択してください");
      return false
    }
  
    if(name_form.inquiry.value == ""){
      alert("問合内容を記入してください");
      return false
    }
  }

  