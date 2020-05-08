import os
import markdown


def mkdir_month(m):
    bf = []
    for i in os.listdir(build_dir):
        bf.append(i)
    month_dir = build_dir + m
    if m not in bf:
        os.mkdir(month_dir)
        print("Create Directory : {}".format(m))


def mkdir_date(m, d):
    bf = []
    for i in os.listdir(build_dir + m):
        bf.append(i)
    # print(bf)
    if d not in bf:
        new_dir = build_dir + m + "/" + d
        os.mkdir(new_dir)
        # print("Create :{}".format(new_dir))
    else:
        # print("Pass")
        pass


def convert_md_html(m, d):
    php_dir = build_dir + m + "/" + d
    php = php_dir + "/index.php"
    
    ### remove
    f = []
    for i in os.listdir(php_dir):
        f.append(i)
    if php in f:
        os.remove(php)
    
    ### open md file
    with open(data_dir + m + "/" + d + ".md", encoding="utf-8") as f:
        l = f.readlines()

    ### html
    html = []
    html.append("<?php include('../../../parts/header.php'); ?>\n")
    html.append("")
    
    ### convert
    md = markdown.Markdown()
    for j in range(len(l)):
        html.append(md.convert(l[j]) + "\n")
    
    ### html
    html.append("<br><br>\n<p><a href=\"../../../\">back</a></p>\n<br>\n")
    html.append("<?php include('../../../parts/footer.php'); ?>\n")
    
    ### export
    with open(php, mode='w', encoding="utf-8") as f:
        f.writelines(html)
    print("*** Generate html : " + d + " ***")
    


###
build_dir = "../build/"
data_dir = "../_data_/"
###


date = input("Build Date : ")

if len(date) == 6:

    yyyy_mm = "20{}_{}".format(date[0:2], date[2:4])
    mkdir_month(yyyy_mm)

    mkdir_date(yyyy_mm, date)
    convert_md_html(yyyy_mm, date)

else:
    print("*** End ***")
