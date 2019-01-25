workflow "Check the code" {
  on = "push"
  resolves = ["Analyse", "Sniff", "Test"]
}

action "Analyse" {
  uses = "./action-analyse"
  env = {
  }
  secrets = []
  args = "\"Hello $GITHUB_ACTOR! I'm going to analyse the code...\""
}

action "Sniff" {
  uses = "./action-sniff"
  env = {
  }
  secrets = []
  args = "\"Hello $GITHUB_ACTOR! I'm going to sniff the code...\""
}

action "Test" {
  uses = "./action-test"
  env = {
  }
  secrets = []
  args = "\"Hello $GITHUB_ACTOR! I'm going to test the code...\""
}
