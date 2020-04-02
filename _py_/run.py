import os
import markdown


###
build_dir = "../build/"
data_dir = "../_data_/"
url_list = "../parts/url_list.php"
###


def get_md_file_name():
    mds = []
    ### get md file name
    for i in os.listdir(data_dir):
        md = i.split(".")
        mds.append(md[0])
    mds = sorted(mds)
    return mds

def gen_url_list_php(md_list, php_path):
    ### remove
    os.remove(php_path)
    ### gen php
    txt = []
    txt.append("<!-- url -->\n")
    txt.append("<div class=\"url\">\n")
    for i in range(len(md_list)):
        txt.append("    <p><a href=\"./build/{}\">{}</a></p>\n".format(md_list[i], md_list[i]))
    txt.append("</div>\n")
    ### save file
    with open(php_path, mode='w') as f:
        f.writelines(txt)
    # print("Export URL-PHP")

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
    with open(data_dir + d + ".md") as f:
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
    # ### export
    with open(php, mode='w') as f:
        f.writelines(html)



###

tf_url = input("Update url list (y/n) ?")
if tf_url == "y":
    mdl = get_md_file_name()
    # print(mdl)
    gen_url_list_php(mdl, url_list)
    print("*** update url list ***")

tf_date = input("Update date (y/n) ?")
if tf_date == "y":
    date = input("date : ")
    mkdir_date(date)
    convert_md_html(date)
    print("*** generate html " + date + " ***")
