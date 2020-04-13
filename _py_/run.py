import os
import markdown


def mkdir_date(d):
    bf = []
    for i in os.listdir(build_dir):
        bf.append(i)
    if d not in bf:
        os.mkdir(build_dir + d)
        # print("mkdir")

def convert_md_html(d):
    php_dir = build_dir + d
    php = build_dir + d + "/index.php"
    ### remove
    f = []
    for i in os.listdir(php_dir):
        f.append(i)
    if php in f:
        os.remove(php)
    ### open md file
    with open(data_dir + d + ".md", encoding="utf-8") as f:
        l = f.readlines()
    ### html
    html = []
    html.append("<?php include('../../parts/header.php'); ?>\n")
    html.append("")
    ### convert
    md = markdown.Markdown()
    for j in range(len(l)):
        html.append(md.convert(l[j]) + "\n")
    ### html
    html.append("<br><br>\n<p><a href=\"../../\">back</a></p>\n<br>\n")
    html.append("<?php include('../../parts/footer.php'); ?>\n")
    ### export
    with open(php, mode='w', encoding="utf-8") as f:
        f.writelines(html)


###
build_dir = "../build/"
data_dir = "../_data_/"
###


tf_date = input("Update date (y/n) ?")
if tf_date == "y":
    date = input("date : ")
    mkdir_date(date)
    convert_md_html(date)
    print("*** Generate html : " + date + " ***")
