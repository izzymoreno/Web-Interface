<HTML>
<HEAD>
<TITLE>Выберите язык</TITLE>
</HEAD>
<BODY bgcolor=black ondragstart="JavaScript: return false" onselectstart="JavaScript: return false">
<INPUT type="text" name="text1">
<SCRIPT language="JavaScript">
<!--
//Создаём массив координат для иконок языков
XIcon=new Array(200,200,241,200,241);
YIcon=new Array(300,300,300,333,333);
//Создаём иконки языков
CreateImageLanguage(7,200,300,36,28,'Images/Select.gif','Select');
CreateImageLanguage(8,200,300,36,28,'Images/Soviet.gif','USSR');
CreateImageLanguage(9,241,300,36,28,'Images/America.gif','USA');
CreateImageLanguage(10,200,333,36,28,'Images/Germany.gif','Germany');
CreateImageLanguage(11,241,333,36,28,'Images/France.gif','France');

function CreateImageLanguage(objnum,DivLeft,DivTop,Width,Height,PathFile,Flag)
{
ApILanguage="<DIV id='country"+objnum+"' STYLE='position: absolute; cursor: hand; left:"+DivLeft+"; top:"+DivTop+"' width:"+Width+"; height:"+Height+">"+"<IMG name="+Flag+" src="+PathFile+" onmousemove='FlagOn(this)' onmouseout='FlagOff(this)' onclick='FlagClick(this.name)' title:'"+Flag+"'>"+
"</DIV>";
document.write(ApILanguage);
objnum++;
}

function FlagOn(obj)
{
if(obj.name=='USSR')
   {country7.style.left=XIcon[1];
    country7.style.top=YIcon[1];
   }
if(obj.name=='USA')
   {country7.style.left=XIcon[2];
    country7.style.top=YIcon[2];
   }
if(obj.name=='Germany')
   {country7.style.left=XIcon[3];
    country7.style.top=YIcon[3];
   }
if(obj.name=='France')
   {country7.style.left=XIcon[4];
    country7.style.top=YIcon[4];
   }
document.all.text1.value="Объект: "+obj.name;
}

function FlagOff(obj)
{
document.all.text1.value="Объект: "+"";
}

function FlagClick(obj)
{
document.location=obj+".htm";
}

//-->
</SCRIPT>
</BODY>
</HTML>