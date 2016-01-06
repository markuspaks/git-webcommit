#!/bin/bash

# The MIT License (MIT)
# Copyright (c) 2013 Alvin Abad

if [ $# -eq 0 ]; then
    echo "Git wrapper script that can specify an ssh-key file
Usage:
    git.sh -i ssh-key-file git-command
    "
    exit 1
fi

SCRIPTPATH="$( cd "$(dirname "$0")" ; pwd -P )"
FILE=$SCRIPTPATH/git_ssh.$$

if [ "$1" = "-i" ]; then
    SSH_KEY=$2; shift; shift
    echo "ssh -o UserKnownHostsFile=/dev/null -o StrictHostKeyChecking=no -i $SSH_KEY \$@" > $FILE 
    chmod +x $FILE
    export GIT_SSH=$FILE
fi

# in case the git command is repeated
[ "$1" = "git" ] && shift

# Run the git command
git "$@"

GIT_STATUS=$?

rm -f $FILE

exit $GIT_STATUS
