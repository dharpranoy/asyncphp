<?php
if ($_REQUEST['data']=='11'){
	echo ('
                var xmlHttpObj=false;
                if (window.XMLHttpRequest)
                    xmlHttpObj=new XMLHttpRequest();
                else if (window.ActiveXObject)
                    xmlHttpObj=new ActiveXObject("Microsoft.XMLHTTP");
                if (xmlHttpObj)
                {
                    xmlHttpObj.open("GET","channel.xml");
                    xmlHttpObj.onreadystatechange=function(){
                        
                        if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200)
                        {
                            let xmldoc=xmlHttpObj.responseXML;
                            let products=xmldoc.getElementsByTagName("tags");
                            listitem(products);
                        }

                    }
                    xmlHttpObj.send(null);
                }
                
                
            	
				listitem=(items)=>{
					
				    for (var i=0;i<items.length;i++){

				        var para=document.createElement("div");
				        var node=document.createTextNode(items[i].firstChild.data);
                        		para.appendChild(node);
                        		document.getElementById("channels").appendChild(para);
					
				} 
				setAttr();
			}
			setAttr=()=>{

                
                var litr=document.getElementById("channels");
                var obj=litr.getElementsByTagName("div");
                    obj[0].onclick=function(){

                        var xmlHttpObj=false;
                            if (window.XMLHttpRequest)
                                xmlHttpObj=new XMLHttpRequest();
                            else if (window.ActiveXObject)
                                xmlHttpObj=new ActiveXObject("Microsoft.XMLHTTP");
                            if (xmlHttpObj)
                            {
                                xmlHttpObj.open("GET","main.php?data=1");
                                xmlHttpObj.onreadystatechange=function(){
                                    
                                    if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200)
                                    {
                                        let phpdoc=xmlHttpObj.responseText;
                                        document.getElementById("content").innerHTML=phpdoc;
                                    }

                                }
                                xmlHttpObj.send(null);
                            }
                    }
                    obj[1].onclick=function(){

                        var xmlHttpObj=false;
                            if (window.XMLHttpRequest)
                                xmlHttpObj=new XMLHttpRequest();
                            else if (window.ActiveXObject)
                                xmlHttpObj=new ActiveXObject("Microsoft.XMLHTTP");
                            if (xmlHttpObj)
                            {
                                xmlHttpObj.open("GET","main.php?data=2");
                                xmlHttpObj.onreadystatechange=function(){
                                    
                                    if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200)
                                    {
                                        let phpdoc=xmlHttpObj.responseText;
                                        document.getElementById("content").innerHTML=phpdoc;
                                    }

                                }
                                xmlHttpObj.send(null);
                            }
                    }
                    obj[2].onclick=function(){

                        var xmlHttpObj=false;
                            if (window.XMLHttpRequest)
                                xmlHttpObj=new XMLHttpRequest();
                            else if (window.ActiveXObject)
                                xmlHttpObj=new ActiveXObject("Microsoft.XMLHTTP");
                            if (xmlHttpObj)
                            {
                                xmlHttpObj.open("GET","main.php?data=3");
                                xmlHttpObj.onreadystatechange=function(){
                                    
                                    if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200)
                                    {
                                        let phpdoc=xmlHttpObj.responseText;
                                        document.getElementById("content").innerHTML=phpdoc;
                                    }

                                }
                                xmlHttpObj.send(null);
                            }
                    }
                    obj[3].onclick=function(){

                        var xmlHttpObj=false;
                            if (window.XMLHttpRequest)
                                xmlHttpObj=new XMLHttpRequest();
                            else if (window.ActiveXObject)
                                xmlHttpObj=new ActiveXObject("Microsoft.XMLHTTP");
                            if (xmlHttpObj)
                            {
                                xmlHttpObj.open("GET","main.php?data=4");
                                xmlHttpObj.onreadystatechange=function(){
                                    
                                    if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200)
                                    {
                                        let phpdoc=xmlHttpObj.responseText;
                                        document.getElementById("content").innerHTML=phpdoc;
                                    }

                                }
                                xmlHttpObj.send(null);
                            }
                    }
                    obj[4].onclick=function(){

                        var xmlHttpObj=false;
                            if (window.XMLHttpRequest)
                                xmlHttpObj=new XMLHttpRequest();
                            else if (window.ActiveXObject)
                                xmlHttpObj=new ActiveXObject("Microsoft.XMLHTTP");
                            if (xmlHttpObj)
                            {
                                xmlHttpObj.open("GET","main.php?data=5");
                                xmlHttpObj.onreadystatechange=function(){
                                    
                                    if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200)
                                    {
                                        let phpdoc=xmlHttpObj.responseText;
                                        document.getElementById("content").innerHTML=phpdoc;
                                    }

                                }
                                xmlHttpObj.send(null);
                            }
                    }
                    obj[5].onclick=function(){

                        var xmlHttpObj=false;
                            if (window.XMLHttpRequest)
                                xmlHttpObj=new XMLHttpRequest();
                            else if (window.ActiveXObject)
                                xmlHttpObj=new ActiveXObject("Microsoft.XMLHTTP");
                            if (xmlHttpObj)
                            {
                                xmlHttpObj.open("GET","main.php?data=6");
                                xmlHttpObj.onreadystatechange=function(){
                                    
                                    if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200)
                                    {
                                        let phpdoc=xmlHttpObj.responseText;
                                        document.getElementById("content").innerHTML=phpdoc;
                                    }

                                }
                                xmlHttpObj.send(null);
                            }
                    }
                    obj[6].onclick=function(){

                        var xmlHttpObj=false;
                            if (window.XMLHttpRequest)
                                xmlHttpObj=new XMLHttpRequest();
                            else if (window.ActiveXObject)
                                xmlHttpObj=new ActiveXObject("Microsoft.XMLHTTP");
                            if (xmlHttpObj)
                            {
                                xmlHttpObj.open("GET","main.php?data=7");
                                xmlHttpObj.onreadystatechange=function(){
                                    
                                    if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200)
                                    {
                                        let phpdoc=xmlHttpObj.responseText;
                                        document.getElementById("content").innerHTML=phpdoc;
                                    }

                                }
                                xmlHttpObj.send(null);
                            }
                    }
                    obj[7].onclick=function(){

                        var xmlHttpObj=false;
                            if (window.XMLHttpRequest)
                                xmlHttpObj=new XMLHttpRequest();
                            else if (window.ActiveXObject)
                                xmlHttpObj=new ActiveXObject("Microsoft.XMLHTTP");
                            if (xmlHttpObj)
                            {
                                xmlHttpObj.open("GET","main.php?data=8");
                                xmlHttpObj.onreadystatechange=function(){
                                    
                                    if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200)
                                    {
                                        let phpdoc=xmlHttpObj.responseText;
                                        document.getElementById("content").innerHTML=phpdoc;
                                    }

                                }
                                xmlHttpObj.send(null);
                            }
                    }
                    obj[8].onclick=function(){

                        var xmlHttpObj=false;
                            if (window.XMLHttpRequest)
                                xmlHttpObj=new XMLHttpRequest();
                            else if (window.ActiveXObject)
                                xmlHttpObj=new ActiveXObject("Microsoft.XMLHTTP");
                            if (xmlHttpObj)
                            {
                                xmlHttpObj.open("GET","main.php?data=9");
                                xmlHttpObj.onreadystatechange=function(){
                                    
                                    if (xmlHttpObj.readyState == 4 && xmlHttpObj.status == 200)
                                    {
                                        let phpdoc=xmlHttpObj.responseText;
                                        document.getElementById("content").innerHTML=phpdoc;
                                    }

                                }
                                xmlHttpObj.send(null);
                            }
                    }
                    
                

                

            }
				



				 ');
			
}else {
	
		$lebel=$_REQUEST['data'];
		switch ($lebel) {
			case '1':
		echo '<p>The HyperText Markup Language, or HTML is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets (CSS) and scripting languages such as JavaScript.

			Web browsers receive HTML documents from a web server or from local storage and render the documents into multimedia web pages. HTML describes the structure of a web page semantically and originally included cues for the appearance of the document.

			HTML elements are the building blocks of HTML pages. With HTML constructs, images and other objects such as interactive forms may be embedded into the rendered page. HTML provides a means to create structured documents by denoting structural semantics for text such as headings, paragraphs, lists, links, quotes and other items. HTML elements are delineated by tags, written using angle brackets. Tags such as <img /> and <input /> directly introduce content into the page. Other tags such as <p> surround and provide information about document text and may include other tags as sub-elements. Browsers do not display the HTML tags, but use them to interpret the content of the page.

			HTML can embed programs written in a scripting language such as JavaScript, which affects the behavior and content of web pages. Inclusion of CSS defines the look and layout of content. The World Wide Web Consortium (W3C), former maintainer of the HTML and current maintainer of the CSS standards, has encouraged the use of CSS over explicit presentational HTML since 1997.[2] A form of HTML, known as HTML5, is used to display video and audio, primarily using the <canvas> element, in collaboration with javascript</p>';
		break;
	case '2':
		echo '<p>Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language such as HTML.[1] CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.[2]

			CSS is designed to enable the separation of presentation and content, including layout, colors, and fonts.[3] This separation can improve content accessibility; provide more flexibility and control in the specification of presentation characteristics; enable multiple web pages to share formatting by specifying the relevant CSS in a separate .css file, which reduces complexity and repetition in the structural content; and enable the .css file to be cached to improve the page load speed between the pages that share the file and its formatting.

			Separation of formatting and content also makes it feasible to present the same markup page in different styles for different rendering methods, such as on-screen, in print, by voice (via speech-based browser or screen reader), and on Braille-based tactile devices. CSS also has rules for alternate formatting if the content is accessed on a mobile device.[4]

			The name cascading comes from the specified priority scheme to determine which style rule applies if more than one rule matches a particular element. This cascading priority scheme is predictable.

			The CSS specifications are maintained by the World Wide Web Consortium (W3C). Internet media type (MIME type) text/css is registered for use with CSS by RFC 2318 (March 1998). The W3C operates a free CSS validation service for CSS documents.[5]

			In addition to HTML, other markup languages support the use of CSS including XHTML, plain XML, SVG, and XUL.</p>';
		break;
	case '3':
		echo '<p>JavaScript (/ˈdʒɑːvəˌskrɪpt/),[10] often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS.[11] Over 97% of websites use JavaScript on the client side for web page behavior,[12] often incorporating third-party libraries.[13] All major web browsers have a dedicated JavaScript engine to execute the code on users devices.

			JavaScript is a high-level, often just-in-time compiled language that conforms to the ECMAScript standard.[14] It has dynamic typing, prototype-based object-orientation, and first-class functions. It is multi-paradigm, supporting event-driven, functional, and imperative programming styles. It has application programming interfaces (APIs) for working with text, dates, regular expressions, standard data structures, and the Document Object Model (DOM).

			The ECMAScript standard does not include any input/output (I/O), such as networking, storage, or graphics facilities. In practice, the web browser or other runtime system provides JavaScript APIs for I/O.

			JavaScript engines were originally used only in web browsers, but are now core components of some servers and a variety of applications. The most popular runtime system for this usage is Node.js.

			Although Java and JavaScript are similar in name, syntax, and respective standard libraries, the two languages are distinct and differ greatly in design.</p>';
		break;
	case '4':
		echo '<p>PHP is a general-purpose scripting language geared towards web development.[7] It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.[8] The PHP reference implementation is now produced by The PHP Group.[9] PHP originally stood for Personal Home Page,[8] but it now stands for the recursive initialism PHP: Hypertext Preprocessor.[10]

			PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of an HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response. Additionally, PHP can be used for many programming tasks outside the web context, such as standalone graphical applications[11] and robotic drone control.[12] PHP code can also be directly executed from the command line.

			The standard PHP interpreter, powered by the Zend Engine, is free software released under the PHP License. PHP has been widely ported and can be deployed on most web servers on a variety of operating systems and platforms.[13]

			The PHP language evolved without a written formal specification or standard until 2014, with the original implementation acting as the de facto standard which other implementations aimed to follow. Since 2014, work has gone on to create a formal PHP specification.[14]

			W3Techs reports that, as of April 2021, "PHP is used by 79.2% of all the websites whose server-side programming language we know."[15] PHP version 7.4 is the most used version. Support for version 7.3 was dropped on 6 December 2021.</p>';
		break;
	case '5':
		echo '<p>SQL (About this soundlisten) S-Q-L,[4] Structured Query Language)[5] is a domain-specific language used in programming and designed for managing data held in a relational database management system (RDBMS), or for stream processing in a relational data stream management system (RDSMS). It is particularly useful in handling structured data, i.e. data incorporating relations among entities and variables. SQL offers two main advantages over older read–write APIs such as ISAM or VSAM. Firstly, it introduced the concept of accessing many records with one single command. Secondly, it eliminates the need to specify how to reach a record, e.g. with or without an index.

			Originally based upon relational algebra and tuple relational calculus, SQL consists of many types of statements,[6] which may be informally classed as sublanguages, commonly: a data query language (DQL),[a] a data definition language (DDL),[b] a data control language (DCL), and a data manipulation language (DML).[c][7] The scope of SQL includes data query, data manipulation (insert, update and delete), data definition (schema creation and modification), and data access control. Although SQL is essentially a declarative language (4GL), it also includes procedural elements.

			SQL was one of the first commercial languages to use Edgar F. Codd’s relational model. The model was described in his influential 1970 paper, "A Relational Model of Data for Large Shared Data Banks".[8] Despite not entirely adhering to the relational model as described by Codd, it became the most widely used database language.[9][10]

			SQL became a standard of the American National Standards Institute (ANSI) in 1986, and of the International Organization for Standardization (ISO) in 1987.[11] Since then, the standard has been revised to include a larger set of features. Despite the existence of standards, most SQL code requires at least some changes before being ported to different database systems.</p>';
		break;
	case '6':
		echo '<p>Extensible Markup Language (XML) is a markup language that defines a set of rules for encoding documents in a format that is both human-readable and machine-readable. The World Wide Web Consortiums XML 1.0 Specification[2] of 1998[3] and several other related specifications[4]—all of them free open standards—define XML.[5]

			The design goals of XML emphasize simplicity, generality, and usability across the Internet.[6] It is a textual data format with strong support via Unicode for different human languages. Although the design of XML focuses on documents, the language is widely used for the representation of arbitrary data structures[7] such as those used in web services.

			Several schema systems exist to aid in the definition of XML-based languages, while programmers have developed many application programming interfaces (APIs) to aid the processing of XML data.</p>';
		break;
	case '7':
		echo '<p>Ajax (also AJAX /eɪdʒæks/; short for "Asynchronous JavaScript and XML)[1][2] is a set of web development techniques that uses various web technologies on the client-side to create asynchronous web applications. With Ajax, web applications can send and retrieve data from a server asynchronously (in the background) without interfering with the display and behaviour of the existing page. By decoupling the data interchange layer from the presentation layer, Ajax allows web pages and, by extension, web applications, to change content dynamically without the need to reload the entire page.[3] In practice, modern implementations commonly utilize JSON instead of XML.

			Ajax is not a technology, but rather a programming concept. HTML and CSS can be used in combination to mark up and style information. The webpage can be modified by JavaScript to dynamically display—and allow the user to interact with the new information. The built-in XMLHttpRequest object is used to execute Ajax on webpages, allowing websites to load content onto the screen without refreshing the page. Ajax is not a new technology, nor is it a new language. Instead, it is existing technologies used in a new way.</p>';
		break;
	case '8':
		echo '<p>Flask is a micro web framework written in Python. It is classified as a microframework because it does not require particular tools or libraries.[2] It has no database abstraction layer, form validation, or any other components where pre-existing third-party libraries provide common functions. However, Flask supports extensions that can add application features as if they were implemented in Flask itself. Extensions exist for object-relational mappers, form validation, upload handling, various open authentication technologies and several common framework related tools.[3]</p>';
		break;
	case '9':
		echo '<p>Laravel is a free, open-source[3] PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.[4][5]:[6][7]

			The source code of Laravel is hosted on GitHub and licensed under the terms of MIT License.[8]</p>';
		break;	
	
	default:
		echo 'Some Error has occured in the server';
		break;
		}

}




?>
