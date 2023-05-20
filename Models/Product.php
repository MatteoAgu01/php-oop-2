<?php
include __DIR__ . '/Category.php';
class Product
{
	public $name;
	public $type;
	public $image;
	public $price;

	public function __construct(string $name, string $type, string $image, string $price)
	{
		$this->name = $name;
		$this->type = $type;
		$this->image = $image;
		$this->price = $price;
	}
}


$cucciaGatto = new Category('Cuccia per gatto chiusa', 'Utility', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBESEhISERIREhEREhIREhEREhEREhISGBgZGRgYGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QGBESGDQhGiExMTE0NDQxMTExNDE0NDQxMTQ0NDQxNDE0NDQ0NDE0NDQ0NDE0NDQxMTQ0MTE0MTE0NP/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAQIEBQYDBwj/xAA+EAACAQMBBAYGCAUEAwAAAAABAgADBBEhBRIxQQZRYXGBkQcTFCKhsSMyQlJyksHRYoKisuEkM/DxY3PC/8QAFwEBAQEBAAAAAAAAAAAAAAAAAAECA//EABsRAQEBAQEBAQEAAAAAAAAAAAABEQIhMUES/9oADAMBAAIRAxEAPwDyGNMdGmUJCEJAkWEIBCEJQsISw2PsS6vH3LWi9VhxKjCr+Jj7q+JgQIk9d2D6HCcPf3GOZpW3yNRh8l8Z6BsnoNsy1wadpSLDUVKq+ufPWGfOPDED5stNnXFb/ZoVqv8A6qdR/wC0GW1DoTtV9Vsbn+ZAn9xE+nlpgDAAAHAAYEduwPmZuge1wMmxreBQnyDSBddGNo0/9yyulA4n1NRgO8qDifVG7EKQPkN1KkqwKsNCrAqw7wYgn1jf7It7hd2vRpVV6qiI4/qExe2fRTs6tlqIe1Y65pMWp57VbIx3YgeBExCZtekHo02habzoouqQ13qIO+B/FTOv5d6YxlwSCMEHBB0IPURygNBhFhATEXEIQgxCEIUQhCAQhCARpjo0wEhCEgIQiygjqdNmYKiszMQqqoLMzHQAAcTJGzdn1bmqlGgjPUc4VR8STyA5me/dBOgVHZ6irU3at2w96oR7tPP2aYPAdvE/CBjuh3onaoFrbS3kU6rao2GI/wDI4+r+Fde0cJ7Bs/Z9G3RadGmlNF4KihVHgJJURwgAEXEIsBIRYQEiR0SAkQiOiQObJmZLpX0Gs78FnT1dfHu16YCv/NyYd/hibGMYSj5i6UdEbvZz4qrv0icJXQH1bdQb7rdh8MzPz6wv7GnWRkqIro4KsjgMrA8iDPDenvQF7Per2oapa8XTVnodv8SdvEc+uMGBhCEgIQhAIQhAIQhAI0x0QwEiRYSIJ3srSpWqJSpIXqVGCIi8ST8hzzOE9y9FfQ/2amLquv8AqKy+6pGtKmdQvYx4nwEqr3oF0Np7OojOHuXANWrj+hepR8eM2KiIgjxABFgIsAhCEAhEzIl5tKhRGa1WnT/G6qfIwJkJnKvTXZqnBuAfwJUYeYWFPpps1jj2gD8aVFHmVgxoohkO02jQrDNKrTqfgdWPlJWYDo2OhAYwka5ohgQQCCMEHXSSjGMJR4H6RehBtGa5tl/0znL0wP8AZY8x/Cfh3cMBPqy/tUqIyOoZWBVlIyCDxBE+eOnHRhtn3BCgm3qEtSY5O71oT1jl1juMUZqEISAhCJAWEIQCIYsQwEhFjqdNnZVUFmchVUcSxOAPOEbL0Y9GvbLr1tRc0LYqxB4PU4qvaBxPh1z6EoJgTNdCdhrZ2lOkMbwG87fec6sfP4ATUpKp4jhGiOEgcIQiEwFJlPt7pBbWSb1Z/fYe5SXV27hyHadJW9MulaWSerp7r3LjKodVRfvv+g5zx+8unrO1Sq7O7HLMxyT+w7JLWpzrS7a6dXdwStNvZ6Z03aZ+kI/ifj5YmXdyxLMSzHizEknvJjISNYXMMxIkDojlSGUlWHAqSCO4iajYnTq7oELUb2imPsufpAP4X4+eZk4smlj3bYXSC2vE3qL++B79NtHTvHMdo0ltPnm0unpOtSm7I6HKspwR+47J670O6WpeL6upupcoMlRotQDiyfqOU1KzecakxpixDNMuTiZjphsJLy3qUmGpG8jc0cfVYf8AOualpFrrkREfKt1bPSqPTqDdemxVh2jq7Oc5T0f0r7C3HW7QaNhKuP6G/TxE84kqiJFhAIQhAIhixIBNl6MNke0XgqMMpbAP2b7aL5anymNntvoo2b6qzWoR79ZjUPcdF+AHnEHotuuAJLWRqUkLKHiOEaI6QLmU/SbbaWVu1VsFz7lNPvOeA7hxPYJbzxbp5tv2u7ZVOaNDNOn1Eg++/iRjuAktWTaoLy6es71KjF3dizMeZPyHZOESEjZcwiQgLEzCEKIZhCEGZ2trl6bpURijowZWHEESPmLmB7n0V28l7bipotRPcqoPsv1jsPES5M8Q6IbaNndI5P0VTCVRy3Cfrd6nXznt2QRkag6gzUrHUw1pxqToxnJjNMs50o2ctxQqU2GQyFf2M+drmg1N3pv9ZGZG7wcT6cvFyDPCPSLs71V3vgYWsuT+JdD8MeUlVlYRsBIHQhCARDFiGA+3pF3RBxd1QfzED9Z9JbAoCnSpoBgKqqO4CeB9Ebf1l7QHJWLn+UHHxxPoPZ+ijulguKc7qZGQzspgdQY4RgMcIFP0u2mbWzrVFOHK+rpnnvv7oPhknwnhU9J9LV57trQHBjUrN/LhV/ufynmomOq1zCwimmw4g+Ufb21SowVEZ2OgCgkzLbnCaa16MqgBuah3udOmRkfic6A9gzKzbtrSpsnqgyqwbIZt45B45/5wmjL9VUIkJkLCJmJmAsImYEwFns/QDavtFkgY5egfUvniQACh/KR5GeL5m49Fl9uXNWiTpVp74H8aH9mPlNc31nqePUHnF2natwkV2nRhHrnSeYek+z3qO+BrTYN4cD8DPTKzTHdMaAehUU/aRh5iB4iRExF7+POEyCEIQCIYsSBqvR3TzdlvuU8fmP8Aie4WLaCeLejkfS1D2IP7p7JYvoJYv4uabTuhkOm0ko0qJCmdFkdTO6cJBheltmla7LOA25SRADqMasf7pysth0sArTUZ46CW+0aW9dVO3cH9IlhbW4C46tZGt8Va7Fpn6yjHaAZHqUqdP3V3aa8NFwT5DhNG6aSFXoZPAHvELKpzTpuCAy66D3kX5n9JjOkeyavrMgL6tF3QQ6HrJJ16zNvtA1QuFUFuR4BR1yjeiXYhgp/kXOfKZrfuMGaBiGiZuX2Qh1x4RE2SpOFX4QjDGi3UYnqH+63kZ6MmxgOXwj12JmTB5wLV+rHfpOb0iP34T0KtscA4I+Ei1thLyA8owYUiXXQy49XtC0bOhqbh7nBT/wChJd1sLHIj4yvsbR6d1bNxC3FA5HY6mRK91q8DIFRpYVeB7jKuq07OaNXeZzbxyjdxl1cvM/td/cbuMDxa8TdqVF6nb5zhJm11xXqfiz8BIcyCEIQCIYsQwNf6Pmw9TvT9Z65YVNBPG+g1TFSoPwH5z1fZ9bQSxfxpaTySjSsoPJiPKicrSRTOkgo0l0G0kFBtC6pJdsj1KauwRghZQ5GMZC8TwPlLCnUBA3SDkHhMh6QehVS+uqVxSdV3aApOGZkyVdmVgANSN48xwE02yLD1VOmrneqLTVajAnDvgBmx28ZlqXxz2tt22tU37ioEXKqOJJc8AANSZC2F0ntb5mFsXYIAzM9NkXBJA1PPIPlO3SHozSvhTV2KerL8FDBg4Gcg9wkrYmwbexpeqoLgZyzH6znt/aPRNdAdCAQZSXuzgG3l065dZ+E5V+H7xVlxTpZgjsPyk5LNQNBJFBNTpJIp9uezkJmRbUZKQHKKKQ6p33fnHbu7LEQq9rvDhK+taFf+pf6TlUpg8hLhKylxag8QfDGJVpYfT0uH+7T/ALxNbc0NZDsbfNxTGOD735cn9JF3xqax0PcZTVnltdNhG7sSirvNxzQbp5nNrVPdMurx+My+2Kuhlqx5ttk/TVO8fKQZJ2m2arntHykYTKFhCEAjTHRDAuuilXdrkfeT5H/M9S2dX0E8e2RV3K9M9ZKnxH/U9N2bcaCI1PjaW1WWFN5n7StLWjUmkq1R5Mtn1x1yqpvJVKpggwifcj3c9R+EoOkF5XoJ66iqOir9ICTvqOtRwPbrNHgMMcmGPOY3aL1aj1Ldvo1UlWckZYdagciNdeuZrXF9W3R65rVKfra4VWqHeRFzkJ9ne7SNccpOuX00Imbtq1S3UKWFRANDkhvEc5ZWd2a+gDBee9qD1gdsmxrqbbfxOt2JH7R1UYWdggUYA0+Ej1+rrhktuJJOki2ykDxPzkqZKYSRg4z3RzaxcGBEsDCscdYuIhIlEO4XEbsqj9I76e6MDvP+BO9cyVa091B1n3j48PhE+l+I+03woHWZQ3LyftSvlyB9nSUd1Vm4yg31XjMltitoZeX9bjMjtevoZKrI3RzUc9s4xWOST1kmEiCEIQCIYsaYDkbdIb7pB8jPQNlXOVU9YBnns0vR+69wA8VO7+0LHollccJc29aZCzuOEu7W4litJSqyUlSUtGtJtOrKy0VhWyN3mOHdK7pFs133atL66jcqDT3k5Hw+R7Jyt7gqQRyl7Rqh1BHA8R+knU1ZcusxabMzguxZscOA+Eu7eiEGAAJ0e2C6qcD5Tg7jXL+WvlOeY1brs9QDhqeqc6SFjkzmjZ+qrY68DMlppwGO+N1MwxVwT3zvGAa5j5cLRGEjPyikRN2MDiZzOsGBjVUk4EByUgxweA1P7R95XFNGY8eA750ACjHVxPWeuZvbF/vthT7q8O09c3IlQ7mtx14you63GdbmvKW8uOM0Id/X4zIbZr6NLq/uOMym1auTjxmaIGYZiQEiHQhCARpjo0wCTNl19ypjk2njykOAPnA3dnccJd2tzMVs66yoPn3y9trmJWmvt7iWFKvMrbXMs6FzNI0VOtLKwvih61PETNUriSkryjco6uuRhlYTn7KvIaTN2O0WpnTVTxWaO1vEqDKnXmOYmbyfDwMRuczqyg9naJyakw4YPz+MzhpwhvCMCtzBHhGkgc2J6lUsfgIHXIPKIROShzwVgOtxu/A4M7rTHM5PZw84DNwnh58p1VQBgeJ64j1AoyxCqPATO7V25nKU9BwL8z3TUiO22tqAZpodeDMPkJma9ecq9x2ytubmaxTrm4lLeXHGOubiU13cSURb2vM5XfeYmT764wDrrwEqg0yU+EZmKsiOkIQlBGMY+c24wDehmJEgTNn1SHCj7WgHbyl9bXEyuZdWW0FYAVF3mH21O7UI7TwbxGe2RWkt7iWVC6meovTP1KmOx1ZT4Fd4HxxJtEvy3W/Cyt8AZqVWko3Um07mZunVccVYd6mS6V0JZUaNLiSqN0QcgkEcwZnad0JJW5mhsLXb7DRwHHXwMtaO2KL/AGt09TTAJczoLmTEejpdUzwqL4MIrXC83X8wnnPtUQ3XbH8jfVdpUV41F8DvH4StuukaDSmpJ620HlMe92Ov4zi91n/EZBb3203qH32z1AaAeEq6txIdSu3UfHT5yLVqnmVHewPyzKJNa4lbc3HbONeuObflBI8zj5StuLle3xP7SWqdc3UqLqudY64uJUXdfOnnM2iLVfeJMZFKxQsygUxyxAIogdIQhKCc24zpObcYCRIsSAkcrEHI4iJEkFpb3GR28xJ1KuZn0cg5En29wD2HqhdaGhdkcCR3HEnU9ovzdj3kmZxKskJXmpRpUvjz3T3qp+YndbzsX8qj9JnEuJ3S57ZdGiS77F8hHG80OAucHGg4yhW5jxcy6Jg2tWJwETlq1F/HiOvElW185zvhRoMbqBdcnPLulV7V2xDddsguWvj94+eJwe8PWfOVTXU4PdS6LKpdSJVuu2QHuZGevJolVbiQa1acalaQq9xjvktD7m485CzEJJ4wkQsXMSLiQEBEiiB0hCEoJzbjOk5txgJCEJARMRcQxATEUdkdiGJR2p3JH1vOSkuAeBlfiG7At0rTqteUqsRwJjhVcc401dC4jxcSkFy/ZHe0v2fGXRdG4iG4lN7S/ZE9pfs8o0W5rzm1aVRrOecYWY8SfONFk9cdcjPdDvkXEMSaHPVY9k5Yj8QxIGYi4jomICCEWEBICEUQHwhCUE5txhCAQhCQLCEJQsIQhBFhCFEIQhBCEIAYsIQCEIQAQMIQEMIQhREhCAGJCEgICEID4QhKP//Z', '59.99', 'cat');

$ciboGatto = new Category('Croccantini per gatto fino a 12 mesi', 'Food', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRG7x-yLQj748MWsHqZ2Dr4Y3waAASJtNQZRkoR8VgU-EWlCzPEduM29WlC0C2J5Y9i2DQ&usqp=CAU', '15.00', 'cat');
$ciboGatto->setWeight('2.5 kg');

$collareGatto = new Category('Collare per gatto con gps', 'Utility', 
'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBIe_oxFfpNRZ4S8Y3oA9T2UVHnMpRnewuvg&usqp=CAU', '8.00', 'cat');

$tiragraffiGatto = new Category('tiragraffi a 4 pieni con cuccia' , 'Utility',
'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzqemswFDgxICPbLwK6A7duZC0PhTGkx-xug&usqp=CAU', '119.99', 'cat' );

$cucciaCane = new Category('Cuccia per cane interno', 'Utility', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoKLBXltkL2l1JY37-uww0olNtJW_lgmBX4w&usqp=CAU', '34.90', 'dog');

$collareCane = new Category('Collare per cane a croce', 'Utility', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFBcUFRQYGBcaGhsdGxobGxseGxodHBsbGyEgGhsbICwkHiApIBoaJTYlKS4wMzMzGyI5PjkyPSwyMzABCwsLEA4QHhISHTIkJCkyMDIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIwMjIyMDIyMjIyMjI9MjI9Mv/AABEIAOoA2AMBIgACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAAABgQFBwMCAQj/xABBEAACAQIDBQUFBgUCBgMBAAABAgMAEQQSIQUxQVFhBhMicYEHMpGhsRQjQlLB0WJyguHwM5JDU6KywvEVY3M0/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAMCBAEF/8QAIREAAgICAwACAwAAAAAAAAAAAAECEQMhEjFBIjITUWH/2gAMAwEAAhEDEQA/ANmooooAooooAooooAr5X2kX2pdo2wuGEUTWlnuoI3ogtnYddQo6t0oCl7Ze0lkdoMFlJQkPMwuMwNisanQ21BY6X3A167C+0N5XMGMIufclAAB4WcAWH827nWWIVUW5cB+lO2J7InCYKPEy6TyOq5L6RoyM2Uji3hBJ4bhQG3A19pI9me1mlgaJyWMWUKTvykEAHysad6AKKKKA+UUVWbX2zHhx4jdj7qD3m9OA6142ltnqV6RKxuLSJCzmw+ZPIdapDthmux8CfhAsWPW9LOI2hJiXDSEBVJbINygaAeZ515baGY2tcjluUdK5p5X4dEcSXfYzf/JM34iPr613jncizM3xqlwmIBFhqRvPE1JfEEAGprJ/Tbx/wnfajuZz8TXdcQbaMfjS1iZyCxP4R8SajbL2vnfLcX4a7/715+XZ7+LQzTzSqc6NcD3lOot9albN27HL4TdWvax3HyNRYp6X+0cYikSZR925yMvJjqD62rf5HHaMLHGTpmh0VnmH7UyRoCtnVTYq2+38Lf8AunHY+14sSmeNtfxKfeU8iKvjyxn0SnilDss6KKKqSCiiigCiiigCiiigPhr8/e0jaRn2hLrdYrRp/SLt8XLfAVv0jhQWO4Ak+Qr8uyz94zSHe7M/+4lv1oC/9nOyhidoxqwukYMrjgchGUH+tlPoa0H2tYsBcNFfXM8luiIU+slU3sTh+9xT8kjX4lj+lVvtA2l32NmI1WPLAvXJdpLf1sB6UAzeyNP9duifV/2+daXST7LcCUwjOd8kjW/lQCO/kWVyOhFO1AFfCaKX+2mMeLCuycSqE31UMbEjrw9a8bpWepW6IO0e16ktHhxmINs593+kfi891JO08a2rXLSNoGOpJOlyf831XbKlGZ1F7AkDyr7j5wsief0rjnKUns7IRjFaLXDSBI+dtCeZApb2n2nMZKKzAk+EKLk6728zuFSkxzAZfzDefw3qoxHZaViWSzKbHOxIIYX1BHnur2MVfyPJNr6jf2YxzyIGte/x+dNZQ92Bf+1IXZnBSYdgGYlQLm+8k8vOnaHGgiotJSaRRNuKZwx+EtfXwka0l7U2l3bLFDGjHOBd2yKCxCjM1xbUjUmnvHN3kZS9iRoeF6UMT2YaXVbbiCCLg+h31rHx5bE3LjosuynaTvWML+F1J8ObMLj8SN+JT602YuBZo3ib8a6dG4HzvSVsvsuUtJI9m0ylBYi3Ll5DSmXZs7s5vw48/wC9ezcU6RlJtWxOTMrMrdQfPd9a97IxjxyBkYqw4j9eY6GpeNs00pG4u3yNjb1vUV4bOCOdc609HV2tmk9n9v8Aenu5LB7XBG5h+/Sik3Z8jCeMqTcOo06kA/Imiu2GZ0cGTElLRqtFFFdRzBRRRQBRRRQFH2xxndYHEyXsREwH8zDKB6kgetfnNQLAVtvtdxOXZ/d/8ySNfPKe8+qCsRNAaD2C2p9j2di8QADI8yxwr+aTIth5AsWPQGlfDQPJIiJd2LBVO/O7t7xt+Z2uTy8q94JJDFY37uPMdNyGQ2LHqbAA8hTx7MdgkyHEuPBHdUuNGkI1YdEQ5b82blQGj7JwKwQRQKbiNFS53nKACT1J1J5mp1FFAfKrO0OzvtGGlh4svhPJh4l+YFWlFeNWD83wYh43YEWOYhgeBBsQet6l48Esh1p69pHZMMftkIAN1Ey8GUkDOOo48x5UubFwwkxDOReOJHc8vCLKPVyPga5pxp0dUJWrKqRDl62tXbDY9wFXMbG2ldMRHp1A186hqpJWsM0MGEZnzSMcqDidALdTXdNtYNRYyZmHEX+VKXaDGuoEV/Cup5bgbfCoGC2soRT3aNa9yd+nOqRwpq2Tlla0jUcNio5EzxOGHK4+DDh51JwpAzE1m/Z3bK9+six5UJsyjUWOnHlv9K0PGPlvpvAN6jkhwZbHk5qmETln8RPl+1SEWz6cd/KohZha3E1KFh+tRTs21QtTH7w3PF/+8n6V2xBCqHo2zEQoktoGsSN2tyL/ADqRsXAnFNGgYhRcueSi3zO6vVH5Ub5fGy47EbLZ2+0SDRSco5tuJ9PrRTth4FRQiiygWAHCiu+ONRVHzpz5OzvRRRVTAUUUUAUUUUBkntqxnjw0I3BXkPmSqr9GrP8AAYbMbn0HnuA6mmf2m5pNqMnBI41UeYLH08Xyqs2VtZYDIVUM2UiN2/CdPGF3X36HdfzoC6XBO7x7OiA7x2JmcXNrWJDfwoLX5tl41sGzMCkESQoLIihRzNuJ6k6+tKvs02F3UH2mQHvZwG1vdU3qNeJvmPU9KdqA+0UUUAUUUUBQdsMJLLhWjiUszMtwCBdc1zqT5UqYrZH2LDIhILyyZpSOOUeFB/CL/HWtJpK9oK/6Ta38Q6VOcV2UhJ9CLtMWfMNxAPneociAeK+79RUx5QwysNwt5V4eO6lQBmsCfp+ornL+C1j4RISWJvbrlJG7MKrUhyi3WrvHDUg3+lqqX2hErAAEj8TfsK6IPRCS2XfZ3CI0iHKq2IuFzWa2t2uSOHAVoOJGYcz+lI+w5FQ5lYlTut9bU6bPxJZTmYFfnUMu3RbF8VZ1gxNio3i9s3I9a9wXOYNvJI5VV4Zi00gHulb6Hiuo0q0xb/eG3FR8bVJQoo52XGwtlpLh5Y5BmV2t10A1B4EE/Kjs32Zkws7P3geMqQu8NqRvG7S1Xux8P3cKKRY2ufM6n61PrrjBUm+0cryPaXTPtFFFVJhRRSv277ULs/DGQANI5yxqeLW3noN5oC52ltWDDrmmlSMHdmYAnyG8+lLOI9p2zUNu9duqxuR8wKw7FyyzyNLiZGkkJ8TMTYHfkUDlyFlF65lFG4D/AGr+oNAbvhfaXs2Q279k/njdR8bWpowO0IplzxSJIvNWBHrbdX5eIXkPhb6WqTs7EyQP3mHkaN+anfws3MWvowtQDT26ilGLxM8kckas4SNmFlZdE0O7VVe38wqk2Pge9ljiP/EljjvyVnBax55VNGE7S4mFSFkd47/eRykypY6WKOSCnUWIPGnPsBhsNPioZlKQuneOcKCSGLKEEkRY3yjL7uuXU6CgNeRQAABYAWA5AV0oooAooqp7Q7ciwcJmmJtcKqqLs7G9lUcSbUBbUUs9mO18OMd4hHJDPHq8Mq5ZADuNuI+lxzpgxEyRoXdgqKLszEAADiSaAMROqKXchVAuSeFZhtztB9qlK2sig5F49Sep+VVW0O3b4ySWLKFiUlorXuyg5QXB3niPOl9cURIG61LI/CuNels8Nzeo+NxJjCSWzW8LrzBv8Dx9KlGTceBrnio8yMAL3BFq509l2rQu47GxyrKUzAoF0Ntcxtw5WpcZKZOz+xTJG7G9na3WyE3/AOo/9NXq9jkIB13iupKiKhKSsV9hYiRHCqMwPDl5U3bWxMi4ZWtkZicyDU5dwueFyR6Xpq2LsKOPKoQdTakvtJipBNiFkuSCVSx91dLeWh+dHBN2eyXFE7sIrMJHa9lARSeup+Vqd9kbNLzKT7i+Jh5bh6mlzsYAMIlwF1Ygc7n3vWtF7PRWizfmJPoNBUkrkeN8YltX2iiugiFFFFAFYn7R3bF4lpQy9zhSqAHe8jMQAo46qxJ4BK1zbWLMWHlkG9EYjztp86wDaBISJ8xsHs+uhJJszeWca9TQFJOMqRG9wUBvzZrOfXxfKozuQLlWA5lSB8TTVsLHSYeb7shZUJyK4uskbG5Qj83D0HGta7PdtMLirRyZYZ9xjksLt/Ax0by39KA/OwmB41Lgk/z96/RW2ex+z8QrNNhYr2JLqoR/PMlifWvzfipEEkndX7rO3d3N2yBjlueJtagJjtpcWzLuvuIP4TzB3eZFbL7Kdh4dcFFiQiNJIztnKguoDMgUMdRYCx8zWIs/3bMOaW/3g/pW9eySMrs1L7jJMV8u8YfUGgHaiiigCs19rWPEMmz5GBZEnMjjmEKcOJsTWh4nEJGpeR1RRvZiAB6ms39p0seKgieCRHeGTMUIJJQixshHiGYLcbrXoBe7TduMLLjcNisEsnfRGzuVCK8Z3q2tzpmtcaXrjt7tTJtCaNn8GFjmjtD/AM1c/iaTgwAA03eKvO0dsR4yOKNo1jKpMDEiokYkFmSTQaju1a4ubHdSzFiQ0cpLKpAjdb2AspZSqk8bPew3kCgJGAbvMRLIAAPGbAWUZ3JVRbcAOHSu+IiN6ttibPCQK28uM7Hz3AdAP1rjiYdTUJy2WiqR52dNmTKeFTcM9tD6VSQeCTfoas5vzCosshk7MYaPI0Y0eM3I6MSQw5ir0w2GltD+9Z/hMeyuJFJR03G1wRyYcQaZIu0wYAmEn/8ANhr/AEtqKvDIvTXgywSganQAXPQDiaWINjxy4mSSVVkR/Gtje4NgAw6BQfWvGLxUmI8CxmOM+9nYXe24ED8I5cavsDFkSw1NtaSyX0Tkkz5hsMpYAAAAhVHBRu0FPOHjCqFG4AClDCJYajWmTZmJLDK28bjzH715i/ZLIWNFFFXJBRRRQEHa+F72CWMb3RlHmQbfO1YZJhwyPG4tmFiDoQQSLE8DvHnX6BrMvaBsAozYpB4GN5OSMbeI8ka2p/CddxJoDOHjzju38MqaKTpnA0uP4rb14+dqiYjEMPBMmcDTNudf6t4tobMCNanYpg3hkB048R5jjvvwP6cHD5Re0sYtY3syi9rZwLgfwuOXSgLLBdpJ0heGPGMY3RkKSnxorgg5HJNiOBB5aClSXDeMRoGLHcLAj0YGrJcPC2ro9+WUX5nVGsa9SZYxkjjMWfTeO8fooGiDd4jzoCPFhR4Yk8Vmu7cGe1wo6C9z5V+h+xeFEeBw6D8l/wDeS/8A5Viuzdmm6QqAJJCqWG5A2lut73J31+hIYgqqo3KAB5AWoDpRRUDa+0Ew8Ek8jWSNSxPkOHMk6WoDGfaD2jmxW0PssBusbiJE1s0ubKzG3JiV6BTzrQ8F7PMGsISRDJJbxTlmEma2pRgboL7lGgpD9kexe+xs2Lk8Qhva/GWQklh0Clv9wrSu1fauHBxMxIaTciA+89rgE8LXBPTzFAZL2o2cMBjMveGVQodSbByrBg6NbQnLezW1zDTjS33bYfEKxAZUIZV4PG4I0vzUkX4Hyrw7T4/EtrnkclnY+6o/QDcBV5jNn5VTDSyXAJGHxDWAQnUxy6jwMQMrH3bjcLg+cldHtOrLfYeIREWDNmifMcPIeK31je/uup0t/wCh9x0djSlBOYmeCZHEecCRNzo67nTk67+GYaXsaYziSwVJHDMRmjlHuzILajk4uMy793Oo5Ieopjn4ytxWhqZgpg65ePCq7EgkmvuzsQUFra1HsqWcsR9K6YcDS62HOumGfPpVvhsIuYa7xu6GvKN2WmzY1K6cN1XqxkDkKiYNFQaCpj4oWK31tfzrajok5WzxHuFtetWWDNmU9arsEpNWJYL4juGp8hWoHki+orjBMrqHRgysLgg3BHQ12rpIBRRRQBXN1B0OoPDga6UUBnfaT2bpJd8K4jOp7trmO/8AARrHrwsV6Cs9x/YraELE/ZpDbc0ZVwf5SjZviqmv0NRQH5tk2LtQg/cSIoBLO4VQBvJJexG6vGysH3Q7xzmkbXMTe3x/w1oXtH7Q95IcIh+7jIMxH434R+Q0J/saR4FeRtFzMSqqv5nbwovQX39FNAOvs02OXnbEOPDF7vV3U/RWuf5l5Vq1VewNljDQRwg3Ki7NxZyczN6sT6WFWlAFJntXTNsyZb2uUA1trnFvPypzrJ/az2gRyuDUiyESSMDezWOVBbjrc+lAKHYjaeKwwlhSXJCw7yR8oZokQeN47/jN1RRY+Jl0qm21jZcVNlRSN4RL3yJe/iY7zrdmOrEk1PnxATBIQMpnZpCOPdxEpGD5yd4/9C8qsezOAyxxuw8UrBjzy71H6+tYnLijUY8mW+w9jLhYco/1HsXbj0HzrxisKHBVxmRgQQeP7VdyHNrwvUeRNa5W3dnQkqE/G4JpCsLm8wGXDynTvVH/AApSTo6gWVuPG2pqrwGMEd4ZgxiJsRazwyX0kQHXMLtdLgNc8dac9pYRJEMbjwnfzBG4qeBFLmNwpmcwls2MQWVtB9pS11DcBKBpf8Vhe5JI6cc+WmRnDjtEHajSxkBmuCAVdfdlXg6nqCNN4uNNRUeLFtz15Nx9a6YDF5VeKVO8g8RKMcpR+DI1rq3AjcQSbXAI77KwaPG00rmPDRmzvbxO+8RxA73YeijU1pxX6M8mWWypg7WXQ78vH050wRSsskbDXdf6Ui4iYNIZIoxEuhREYnuwBpdjqzG2vW9N/ZrbUcpEc1lk/C+5X6Hk31qM8bW0UhkvTG9FkMjC2lgB8b1JliIAvrzqTgl0ytvG6uuJUkaagHXyrEnaNLs94NDyrn2hkMeFnblG58tKmYdgBS/2/wAXbZ+I4XAT/cwFbiqMyM92P2lkwS5INpLkuWMbYaRkzE3PiKhhc/l0rcNhbSXE4eKdSCHUHw3IB3MATyYEelfl6SYe7l1AvfnWu+w3aJaLEYckkI6uoP4Q+YED1S/rXQRNWooooAooooApa7bdoPseGLr/AKrnJEN/jIOpHEKAT6DnTITWH9sNuHFYl5gfuorxwjeGbi9uu+/IJzoBexD2OW9yCxdjqWkY3ck8dTb0POnn2abI7ycysLphxpfjM66/7E082POkHDABsx91AXbqF1t6mw9a3bsTss4fBRo3vsDJJzLv4jfyuF8lFAMNFFFAZT7S+1zZzgoGZcpHespKkkgERgjXcQTbnWX7QnyjIQwIudFspPQ8T1ph7V4pZdoTygADvLC3HuwEBPnlvUKXDmSfB4e1pA6RsDzeTOTfiArXvQHTb+DJmiwml40w0B5XEau9v65HNNOMskkYGiroB6WFUOzHE+1Hcar32IkHRc7hfSzLV5tRTe/Iio5SuMtMKbr0onFc8M/L4fvXt7b/AK1zliJiUuNDSX2i2e4nDDdIAynkyb9eY0Ip5cVw2js1JozG1wd6sN6sNxFbhLi7MzjaoRIoGxLPPiHK4dGHeyG2aRwL5Ix+OVvlfMaj4za5xDBQoSFFKRRD3Y05/wATneznUnpXfb5meSOGdVQIuRAgyxrzYLxLnUvvN+lRNn7PZmdVVmKIzkIL5QupZuSjea6k7OZqj3H4RZQTYX8upr4FuNeOtdcPtB4SZEtqCrqfddG95Gtrla1jaxtpVxtPAJBlkMLd5IveHDt7uHjbTM2S3d5nbwKfdGUamvQXvZHtl3doMWxKbkmOpTkJOa7rNw41psKCwKkEHUEagjmDxr87PIFNtbdd/rTF2f7WYnBeGNg8X/LkBKD+UjVPTTpU5Y03aNqb9NjxcdrFdOY4Uhe1DFhcH3f53T1sSf0qVD7SYZEHewyI3ELZl9CNfiKQu3XaL7WyBFYIp4i19CB9awoPkaclxF1YWd1yKzM1lCqLkm+gA41+iPZ52Y+w4UK4HfSHPIRwNtEB5KNPjWS+y2Fv/k8PpqBIWvwGQ/O5FfoerkgooooAoorjNKqKzMQFUEsTuAAuSaAUPaXtwwYcQRn77EHu1sfEqHR26bwoPNhyrIJyAQi+6gsLaAncWtzNgL78qqOAtP27t98XPJiyCFN0h4FEGtwPzZSSTzfpVVho8zAE2Xex5KNT8vnagL/stssz4mGK1w7d5J0ij1AP8z2FuPhre6QPZbsu0UmMdbPObIPyxJooHQm/mAtP9AfKWu2O3Ps8LKh+9ZWt/CLaseXSrraOMWGNpHOij1J4AdSayja8zzF2c+N1N+W7QDpwqc58dI3GN7ENXAKgkAXAJJ33PEnz31Ixm2O6nlnRbu4kRH/KXXJ3iEcQuYDzr7h/s8MqeG6vHYO93N2QjMdVHhkJvyy8ba1GMBMSNbUZh6jW3wNUMDh7PcLlV8Q2gI7uPy0ufK/0q82il81q5bDjCYaNRwRbeoBrvI1wa5pu2XiqR6w/u/5c1139K5RDQf5uruy6aH9/86VIogQa1JYaCo1tLgV2Vibc68PSu2zs6OaPI6kEao62ujcDrw5ikIiXDyaEpIhBuPxWNw1jcMDYGxuNK1B00vzqr2vsRcQltFkX3H5Hkea9K3jycdPozkhy6FnC46CRhjHg+8iceBR93iZSPu1yakyZru5vrp0qvwW0pjM88jd5JKT3qm9mU6FP4dLgHeOFcpBJEHw8iWyyZyu5le2XOjDgVArvPtiKRWMkbLPb30KhX4eJCPe90DLYAKOprs7OU5bXeF8oijZGa4IYhlX8xTS9gbqLk/HdN7nByKBnfDvaxznNETqB4h4lv4NTyc8hUXZiYchjiGkjkYgB0syRpYAKUOptvJB4W41X7QVWfKsiyRKA2dQQGJGaxDfl3HeLjeaAlbPwrySJGCvia2bUBUFyzkn8KoC2vKvjvvtcrc2JFiRwJHA9KloDDGb6Syra3GOE6+IcHk004J/NUB24CgHX2W4DPie9sRIjprw7to5QwI6kJ8K26s69kGyzHh3nYaytdf5Fuqn1Oc+RWtFoAooooArO/a1tdo4I8KjeOdrMo94xjeB0LFV8r9actuzFYHy3zNlQEbwXYJcdQCT6VjHabC4xJZMVio2y5QsTr4lRGuVDEDQorG7HeTe+lAL07g5VUeFBYee9j6m/oBUzZezGnkigQkPO9tPwxD3mPqG/2dar8Phs7KEO8jXgBxJ6AXPpWmeyfZeZ5caQcovDDf8AILEkfJfMNQGk4TDJFGkaDKiKFUDgALD5Cu7G2p3V9pS7bbWyL3Ce84ux5Ly8z9BWZS4qz2MbdFD2n219okyofu1Nl/iPFv0FUSv4hXhz6CvSbxXJKV7Z1xjWiDidipGC0YUXvq34Wb3SSdMuYgG+7NfhSxiUMkRci0kb2fS11bcWFrXVgV4aMotpetEaEMpUneCNOtJmJQLP4rWlRkY62Vz4GvYX8MihrAbrb99XxTbWyGSPF6Grs/L3uDhYcECN/Mmh/f1rqq62pf7DYopJLhX6uByZTlYfT4GmbJ46xJVI1F3E5YRhcofSu5BHn9f2FQ8Z4WuOBqTBigwvx+F6myiZJUaabxXyBLm3rXyJtdP89K7YaMb9437/AK1hmkeHe5twqww6X1qBh7sb8zcetXEIyitRjZmUqKHtb2e+0R95GB38YJX/AOxeKH9ORrLWYaNbobjUEc+R4VuqNc1m/b7ZAhmEyD7uY2ccFkAvfyYfMda6YSrRGa9Eqdr7zZfrV1Hgxh1VpUHe6GOBvwcnxA4W3iPedL2FeMJtBYVUQRhJbeOdznkvxEQICxjrYt1qKH33JN95OpJPEk6k9aqSB5GYlnYszElmO8k8TU7YGyzisTHhl/G3iI/Cg1Y/DTzIqCUrUvY7sayS4x18TExxn+BbFyPNwB/RQGk4aBY0WNAFVQFUDcAosB8BXeiigCiiigOUqBgR8+IPMdRSvtPvoZIVJkl
jOcMqmONTuIMhPiY2B8KBVOpIptpY7RtnlSMcIn9GnZIEPwMnwoBQl7HxziVkU4Kc5jogaOSNje4jBvGfwEjKdDvDauXYzZzwYdY3YkKAADa1yS7MLfxOU8kB41eNhYzluinLbLcA5bbst91SKAjY
zErHG0jblBJ9KyzGYgyyM7e85uf0HoKaO3G0r5cOp5M//iv6+gpSzXG+uXNO3R0Yo0rI86V8VCBrUp9169xoCN3pUSx1gOgqg7U7OvmKrcODIBpo6Cz9TmjANr/8O9jwu4hlIXhf417x0XeJlGjDxIT
uzLuv/CdQRxBNUxy4snkjyQgjFmOTD4sHiEk5krZWJv8AmQq3nfyGgSuAQR5386z+bD5WfDm4RySgNxkk1UK19NDdCddLG5q/7NY8yRGN/wDUiOVr7yOB+RHpV8i1ZKD8LTErmI6musWy8puDpxqGZiD
/AJ8qtcNPdRfl61zN0WSOeEkKuQf/AH0qywkK5jrv4HcK5Qwgm9herHILA29a8WzT0fFwmTqOH969pJevEkhtlHGvsUdVRJnbOeFLXblS2ClLWIUqRzuGGopoyaUp+0XEhMIsfGRvkNT9QK1GLszJqjNk
OtfWkUDMx8INtPeY77KLfPrXDOdwI5dRXxUYADMNOJ3/ANq6CJYbMhfEyLFFF3bOyIviLXLm1zm/KLsbW0U1+ktk4BMPDHAg8EaKo62Frnqd/rWb+yDswyBsdKDdgVhB/IbXe3XcOl+darQBRRRQBRRRQF
LPjnkdkhKoiEq8zbgw3rGu5mGoLHRSLWbUCsCJ34aPvJGLq0pfMbBEkyBS2ls7A2XQHXSruWeGNgjMqXuVU+ENc3OW9lLXvu11rrgorZiRa7EjyJvpyG74UBLqBtjHiGMtvY6KvNv251KxWIWNGdjZVBJ9K
zvFbTaSQyOdT7q8FHAD9alknxRTHDkyOcK0hLuxLEkk8yfOvIwIGubzrrJPpqbCq7E4oDebnp/auRnSiTLDocpGvM1GViDrpu41GQs50Vh51YYfZ194ry2apHzu7jfqDpXQgjrurodjjma8jCNHuYEcjp86
0kzNooe1Gzg8ZkW2YWv/ADbgR56Kf6Twpf2LiiMTFJYjvFMcg1BLC+pvz8J9TTttfBCaE5QTlIbKN+h13XvoTWd46Rk7s2dTa9yGzK4JvvG8aC31rpxtuNM556laHOdLuPOpuzielLezNrySyiN41HNgTceEm
7KdwNvjTFgd96hki1ploNPovYjYXqyiHg186qYTpcfCrbDjwHyP0rMNs9n0QcOGc5ju1+HCrJEsKhvio4o80jqij8TEAfOl/H+0DCxgiMmVv4fd+JrqjEg5DZNIqKWdgFAuSTpWNdrdt/apywP3aeFOuup9TRt
ztNPi/CTljv7i8f3qpSD+wG/4ca2lRhuzkiXpk7Jdn/tUqrYiMMA7c7n3R1+lTtg9jmkIac92n5B/qN530X5nyrSuy2z0WQLGgWOMaAczz5neb9KzKe6R6oOrY3wxqiqiiyqAABuAAsBXWiiqGAooooAooooD4R
X2iigFHt7jssaRA2Ltdv5V/S9vhSZFmOtr/wCc6uO2UofFkE6Iqr/5H61WYRyxtuX/ADQcq4sjuR141UQ7pm094ngP8+Zrm2wHOt7DlV7CVAyjQD/NTUlCKzwPef6KGLAyJ5c+lWeGcjRhU10BrmUG6vaoXZIIF
t1qiYlCwNgrc1IqdhUuMtecRhdcw31ePRF9im7GORZEBC5gJI73AB/EvIdKscZCreKwIO+4vXfasAGvPfXHCNmS/mPhXkkExLk2A0OIjlQHIrWLAXzKbgZrbmAaxJsDYG971dYbz+mtXs0fga35T9Ko8KBfTzqe
Vt0VxLstsC/h1q4WcJGzHcqkn0F6psCKsMfh2kw0saWzMhC8r1nH9j3J0Y9tXGyYmRpJHLAk5VJOVRfQKu4aVFWFRvp32V2AkIBxEgjH5EszHzb3R6A057H7PwQWEUIzfnbxyH+o7vS1dlrw5aM32P2UxEwzBB
FFvMklwLdF3n5U07H2FDB4wDI/52A0/lHD60x9oGdSsR0zAMfK5sPlUUIMnnUsmR3RSEF2fYvdJpw7PYbJFmO9zm9Nw+X1pVw0GZkj/MQKfVWwAG6s4Vbs9yulR0ooorpIBRRRQBRRRQBRRXiTcfI0Bku0pu8x
EzcC728gbD6V1hGRQP8ADVbht3+das1/T9q4l2dnlHdL3HzFSo2O7/PKuUP617Tj5mvTJLR9NfjQ2hBHxrxH+pr0v60oWTMI9mF91TJnBGlVabqlRbjW4MzJEDaqgqb6hRc9bc6p9hzgq68mJHlerLa3+nL/APm
1LPZ//U9aqTGkbivQ0uYcWIq/fj5VQYff/V+9c+XwtifZZxLZrD/P3q7wx8NUrfh8/wBqucPu9BWcf2N5OiQmXMFY6kgeVzamjDYZYxZR5niaQcGfHJWgwe4v8o+ldkTkkJna4XxKjlGP+5qr3NrDhVj2q/8A6h
/Iv1aqx/1/SuXJ9mdGPpFv2dXPiAeCKT6nQfX5U5Uqdj/fl8l+pprq2H6kcv2PtFFFWJhRRRQBRRRQH//Z', '15.40', 'dog');


$ciboCane = new Category('Croccantini per cane adult', 'Food', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNYucltU04Vc5JymoffDYAioI74p6PallD1EqoILpIT4vXXYds2dPrfYvaoE0eP-CmL5g&usqp=CAU', '12.00', 'dog');
$ciboCane->setWeight('2 kg');



$tennisCane = new Category('Pallina da tennis colorate', 'Game', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7e_0r6MNSkj08f6wo7ghPtTIJE2MU0s3i2Q&usqp=CAU', '3.00', 'dog');



$products = [$cucciaCane, $cucciaGatto, $collareCane, $collareGatto, $ciboCane, $ciboGatto, $tennisCane, $tiragraffiGatto];
