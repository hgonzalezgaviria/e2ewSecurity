#aws ec2 describe-instances --region $1 --output $2 --filters '[
 # {"Name":"vpc-id","Values":["'$3'"]}
  #,{"Name":"instance-state-code","Values":["16"]}
  #,{"Name":"tag:e2ewNode","Values":["InttegrioSecurity"]}
  #]' --query 'Reservations[*].Instances[*].[PublicIpAddress,PrivateIpAddress,PublicDnsName]'
  aws ec2 describe-instances --region  us-east-2 --filters '[{"Name":"vpc-id","Values":["'vpc-038bd4785e1666ad4'"]},{"Name":"instance-state-code","Values":["80"]},{"Name":"tag:e2ewNode","Values":["InttegrioSecurity"]}]'
