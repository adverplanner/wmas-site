
def compile_haml(infile)
  outfile = File.basename(infile, ".*") + ".html"
  %x[haml #{infile} #{outfile}]
  puts "Compile #{infile} => #{outfile}..."
end

def output_php(infile)
  outfile = File.basename(infile, ".*") + ""
  %x[php #{infile} > #{outfile}]
  puts "Compile #{infile} => #{outfile}..."
  compile_haml(outfile.to_s)
  %x[rm -rf #{outfile}]
end

def compile_scss(infile)
  outfile = File.basename(infile, ".*") + ".css"
  %x[compass compile]
  puts "Compile #{infile} => #{outfile}..."
end

watch(".*\.haml$") { |infile|
  compile_haml(infile.to_s)
}

watch(".*\.haml.php$") { |infile|
  output_php(infile.to_s)
}