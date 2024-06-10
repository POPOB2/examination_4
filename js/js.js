// JavaScript Document
function lof(x)
{
	location.href=x
}


function login(table){
	let ans=$("#code").val()
	let user={
		acc:$("#acc").val(),
		pw:$("#pw").val(),
		table
	}
	$.get("./api/ans.php",{ans},(res)=>{
		if(parseInt(res)===1){
			// alert("正確")
			$.get("./api/login.php",user,(res)=>{
				if(parseInt(res)===1){
					switch(table){
						case 'classb_4_mem':
							location.href='index.php';
						break;
						case 'classb_4_admin':
							location.href='back.php';
						break;
					}
				}else{
					alert("帳號或密碼錯誤")
				}
			})
		}else{
			alert("驗證碼錯誤, 請重新輸入")
		}
	})
}